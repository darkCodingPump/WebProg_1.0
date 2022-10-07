FROM php:8.1.10-apache
RUN apt-get update
RUN apt-get upgrade -y
RUN apt-get install apache2-utils
RUN a2enmod cache
RUN a2enmod cache_disk
RUN a2enmod expires
RUN a2enmod headers
RUN apache2ctl restart
