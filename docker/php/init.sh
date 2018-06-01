#!/bin/sh
set -e
/usr/bin/supervisord &
/usr/local/bin/php /var/www/html/artisan migrate --seed
php-fpm
