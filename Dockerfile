FROM php:7.2-fpm-alpine
# Set working directory
WORKDIR /var/www/html

# Install PHP Composer
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy existing application directory
COPY . .
