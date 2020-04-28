# Set master image
FROM php:7.2-fpm-alpine

WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . .

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN ["cp", ".env.example", ".env" ]

RUN ["composer", "install"]

RUN ["npm",  "install"]
