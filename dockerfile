FROM php:8-fpm

WORKDIR /api

RUN apt-get update

COPY . .

RUN docker-php-ext-install pdo pdo_mysql

CMD ["php", "-S", "0.0.0.0:8000", "-t", "/app"]
