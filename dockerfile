# Base image
FROM php:8.3.10-apache

# Enable mod_rewrite for Apache
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the CodeIgniter files to the container
COPY ./codeigniter /var/www/html

# Install PHP extensions
RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-install pdo pdo_mysql intl mysqli

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Copy custom php.ini configuration file
COPY php.ini /usr/local/etc/php/

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
