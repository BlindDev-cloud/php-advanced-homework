FROM php:8.1-apache

RUN apt-get update
RUN apt-get install libpq-dev -y
RUN docker-php-ext-install -j$(nproc) pdo_pgsql