#!/bin/bash

apt-get update -y
apt-get install -y git bash-completion unzip zip

#chown -R www-data:www-data /var/www/html \
#    && chmod -R 755 /var/www/html \
#    && cd /var/www/html \
#    && chmod -R 775 var/

chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html \
    && cd /var/www/html


#rm -rf /var/www/var/*
#/bin/bash -l -c "$*"
