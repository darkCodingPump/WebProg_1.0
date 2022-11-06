FROM php:8.1.10-apache
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install git -y
RUN composer require vlucas/phpdotenv
COPY ./htdocs/composer.json .
RUN composer install
RUN docker-php-ext-install pdo pdo_mysql
RUN apache2ctl restart
