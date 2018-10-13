############php-container############
FROM php:7.2-fpm

RUN apt-get update

# install pdo_pgsql
RUN apt-get install --no-install-recommends -y libpq-dev 
RUN docker-php-ext-install pdo pgsql pdo_pgsql 

# extract php.ini
RUN mkdir /usr/src/php
RUN tar --file /usr/src/php.tar.xz --extract --strip-components=1 --directory /usr/src/php
RUN cp /usr/src/php/php.ini-production /usr/local/etc/php/php.ini