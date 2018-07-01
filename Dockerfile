FROM php:7.0-apache
COPY src/ /var/www/
COPY apache.conf /etc/apache2/sites-enabled/000-default.conf@
RUN mysql1 mysql -uroot -p
RUN create database group_db;
