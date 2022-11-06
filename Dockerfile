FROM php:8.1.10-apache
RUN a2enmod rewrite
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
RUN apt-get update && \
    apt-get install \
    libzip-dev \
    wget \
    git \
    unzip \
    -y --no-install-recommends
RUN docker-php-ext-install zip pdo_mysql
RUN apt-get purge -y g++ \
    && apt-get autoremove -y \
    && rm -r /var/lib/apt/lists/* \
    && rm -rf /tmp/* 
