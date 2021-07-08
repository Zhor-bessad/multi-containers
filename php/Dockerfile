FROM php:7.3-apache
#RUN apt-get update && apt-get upgrade
RUN docker-php-ext-install pdo pdo_mysql
# for mysqli if you want
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
EXPOSE 80