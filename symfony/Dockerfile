FROM php:8.4-fpm

WORKDIR /app

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libicu-dev \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    nodejs \
    npm \
    libxml2-dev \
    && docker-php-ext-install intl pdo pdo_mysql zip opcache

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /app

RUN composer install

CMD ["php-fpm"]
