# Use the official PHP image
FROM php:8.3-fpm

# Set working directory
WORKDIR /var/www/project

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
# Install system dependencies
RUN apt-get update \
    && apt-get install -y zlib1g-dev g++ git libicu-dev zip libzip-dev unzip

# Install PHP extensions
RUN docker-php-ext-install intl opcache pdo pdo_mysql \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip

# Install APCu extension
RUN pecl install apcu \
    && docker-php-ext-enable apcu \
    && apt autoremove -y \
    && apt clean

# Copy Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony5/bin/symfony /usr/local/bin/symfony

# Install composer dependencies
RUN composer install --prefer-dist --no-interaction --no-progress
