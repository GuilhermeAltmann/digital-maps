FROM arm64v8/php:8.2-fpm

WORKDIR /app

COPY ./composer.* /

COPY / /app

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev
RUN docker-php-ext-install zip

# Install PDO
RUN docker-php-ext-install pdo_mysql


# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


RUN composer install --prefer-dist --optimize-autoloader;

