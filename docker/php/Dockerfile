FROM php:fpm-alpine

LABEL maintainer = 'Bayu Bimantara <bayubimantarar@gmail.com>'

RUN adduser --disabled-password bimantara && \
    apk add zlib-dev libpng-dev libzip-dev && \
    docker-php-ext-install mysqli pdo pdo_mysql gd zip && \
    curl -s https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer
