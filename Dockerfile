# Start with PHP 7.4 FPM image
FROM php:8.3-fpm

# Install necessary OS packages
RUN apt-get update && apt-get install -y curl zip  unzip git libpng-dev libonig-dev libxml2-dev libbz2-dev libzip-dev vim-common && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions required for Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd bz2 zip

# Set the PHP memory limit
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini;

# Install Composer
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

# Set the working directory to the root of your app

COPY . /srv/price_finder_bot

WORKDIR /srv/price_finder_bot



