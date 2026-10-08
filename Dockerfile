# ==========================================
# Stage 1: Build Frontend Assets (Vite)
# ==========================================
FROM node:20-alpine AS frontend
WORKDIR /app

COPY package*.json ./
RUN npm ci

COPY . .
RUN npm run build

# ==========================================
# Stage 2: Production PHP-FPM & Nginx Environment
# ==========================================
FROM php:8.2-fpm-alpine

# Install system dependencies & required PHP extensions (including pdo_pgsql)
RUN apk add --no-cache \
    nginx \
    gettext \
    postgresql-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    libzip-dev \
    zip \
    unzip \
    bash

RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql gd zip opcache bcmath

# Copy Composer binary from official Composer image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy application source code
COPY . .

# Copy compiled Vite assets from Stage 1
COPY --from=frontend /app/public/build ./public/build

# Install Composer dependencies (production only)
RUN composer install --no-dev --optimize-autoloader --no-interaction --prefer-dist

# Copy Nginx configuration file
COPY docker/nginx.conf /etc/nginx/http.d/default.conf

# Set permissions for Laravel storage and uploads
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public/uploads \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public/uploads

# Set execute permissions for container start script
COPY docker/start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

EXPOSE 10000

CMD ["/usr/local/bin/start.sh"]
