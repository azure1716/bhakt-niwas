#!/bin/sh
set -e

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

# Cache Laravel configuration if APP_KEY is provided
if [ -n "$APP_KEY" ]; then
    echo "Caching Laravel configuration, routes, and views..."
    php artisan config:cache
    php artisan route:cache
    php artisan view:cache
fi

echo "Starting PHP-FPM..."
php-fpm -D

echo "Starting Nginx on port $PORT..."
exec nginx -g "daemon off;"
