FROM php:8.2-apache

# Install mysqli
RUN docker-php-ext-install mysqli

# Disable conflicting MPM modules
RUN a2dismod mpm_event || true
RUN a2enmod mpm_prefork

# Copy project files
COPY . /var/www/html/

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
