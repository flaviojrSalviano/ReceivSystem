FROM php:7.1-fpm
RUN docker-php-ext-install mysqli pdo_mysql

RUN apt update \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
