FROM php:8.1-fpm-alpine

WORKDIR /var/www/html

RUN docker-php-ext-install pdo pdo_mysql

COPY --from=composer:2.5.4 /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html
