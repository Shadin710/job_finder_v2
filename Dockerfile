FROM php:8.2-apache

RUN docker-php-ext-install mysqli

# Remove default apache config that causes conflict
RUN rm -rf /etc/apache2/mods-enabled/mpm_event.load || true
RUN rm -rf /etc/apache2/mods-enabled/mpm_event.conf || true

COPY . /var/www/html/
