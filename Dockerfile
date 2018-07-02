FROM php:7.0-apache
COPY src/ /var/www/html/
COPY apache-config-file.conf /etc/apache2/sites-enabled/000-default.conf
RUN /usr/local/bin/docker-php-ext-install mysqli
RUN php /var/www/html/install.php
EXPOSE 80