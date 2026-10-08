#!/bin/sh
set -e

# Change directory to application root
cd /var/www/html

# Replace PORT placeholder in nginx configuration with Render's PORT or default to 10000
export PORT=${PORT:-10000}
sed -i "s/LISTEN_PORT/$PORT/g" /etc/nginx/http.d/default.conf

# Ensure required storage and cache directories exist
mkdir -p /var/www/html/storage/framework/cache/data
mkdir -p /var/www/html/storage/framework/sessions
mkdir -p /var/www/html/storage/framework/views
mkdir -p /var/www/html/storage/logs
mkdir -p /var/www/html/public/uploads/blogs

chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public/uploads

# -------------------------------------------------------------
# 1. Database Connection & Environment Safety Verification
# -------------------------------------------------------------
# Reject MySQL: this production deployment strictly connects to Supabase PostgreSQL
if [ "$DB_CONNECTION" = "mysql" ]; then
    echo "================================================================"
    echo "FATAL: DB_CONNECTION is configured as 'mysql'."
    echo "This deployment must connect to Supabase PostgreSQL, never MySQL."
    echo "Please set DB_CONNECTION=pgsql in your Render environment."
    echo "================================================================"
    exit 1
fi

# Ensure DB_CONNECTION defaults to pgsql
export DB_CONNECTION=${DB_CONNECTION:-pgsql}

# Ensure high-performance session driver (cookie) to eliminate Supabase roundtrips on every request
if [ "$SESSION_DRIVER" = "database" ] || [ -z "$SESSION_DRIVER" ]; then
    export SESSION_DRIVER=cookie
fi

echo "=== Database Environment ==="
echo "  DB_CONNECTION:  $DB_CONNECTION"
echo "  SESSION_DRIVER: $SESSION_DRIVER"
echo "  DB_HOST:        ${DB_HOST:-not set}"
echo "  DB_PORT:        ${DB_PORT:-5432}"
echo "  DB_DATABASE:    ${DB_DATABASE:-not set}"
echo "  DB_USERNAME:    ${DB_USERNAME:-not set}"
echo "============================"

# -------------------------------------------------------------
# 2. Database Migrations (Safe, non-destructive)
# -------------------------------------------------------------
echo "==> Running database migrations (php artisan migrate --force)..."
if ! php artisan migrate --force; then
    echo "================================================================"
    echo "FATAL: Database migration failed!"
    echo "Stopping container to prevent starting an unhealthy service."
    echo "Verify your Supabase PostgreSQL credentials and network access."
    echo "================================================================"
    exit 1
fi
echo "==> Database migrations completed successfully."

# -------------------------------------------------------------
# 3. Database Seeding (Idempotent ProductionDataSeeder)
# -------------------------------------------------------------
echo "==> Running idempotent database seeder (php artisan db:seed --force)..."
if ! php artisan db:seed --force; then
    echo "================================================================"
    echo "FATAL: Database seeding failed!"
    echo "Stopping container to prevent starting an unhealthy service."
    echo "Verify database connectivity, permissions, and seeder data."
    echo "================================================================"
    exit 1
fi
echo "==> Database seeding completed successfully."

# -------------------------------------------------------------
# 4. Cache Laravel configuration, routes, and views
# -------------------------------------------------------------
if [ -n "$APP_KEY" ]; then
    echo "==> Caching Laravel configuration, routes, and views..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
else
    echo "==> WARNING: APP_KEY is not set. Skipping cache generation."
fi

# -------------------------------------------------------------
# 5. Start Web Server and PHP-FPM
# -------------------------------------------------------------
echo "==> Starting PHP-FPM..."
php-fpm -D

echo "==> Starting Nginx on port $PORT..."
exec nginx -g "daemon off;"
