FROM php:8.3-cli

# Install dependencies yang dibutuhkan
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libpq-dev \
    zip \
    unzip \
    && docker-php-ext-install pdo pdo_pgsql mbstring xml gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /app

# Copy seluruh file project ke dalam container
COPY . .

# Install library PHP
RUN composer install --no-dev --optimize-autoloader

# Pastikan folder storage dan bootstrap bisa ditulisi (mencegah error tempnam)
RUN mkdir -p storage/framework/views storage/framework/cache/data storage/framework/sessions \
    && chmod -R 777 storage bootstrap/cache

# Jalankan server bawaan Laravel pada port yang ditentukan oleh Railway
CMD php artisan migrate --force && php artisan db:seed --force && php artisan serve --host=0.0.0.0 --port=${PORT:-8080}
