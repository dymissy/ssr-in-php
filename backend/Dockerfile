FROM php:8.2-cli

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y unzip curl zip

COPY . /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install || true

CMD ["php", "-S", "0.0.0.0:80", "index.php"]
