#!/bin/sh
set -e

/usr/bin/supervisord &
php-fpm
