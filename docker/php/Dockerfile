FROM php:7.4.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    zip \
    libfreetype6-dev \
    libmcrypt-dev \
    supervisor \
    libjpeg-dev \
    libpng-dev \
    vim \
    && docker-php-ext-install iconv pdo_mysql \
    && docker-php-ext-configure gd --with-freetype \
    && docker-php-ext-install gd \
    && docker-php-ext-enable opcache gd

ADD talk-worker.conf /etc/supervisor/conf.d/talk-worker.conf

#WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | \
php -- --install-dir=/usr/bin/ --filename=composer

RUN pecl install -o -f redis && docker-php-ext-enable redis
ENV COMPOSER_ALLOW_SUPERUSER=1


ENTRYPOINT ["./docker/php/init.sh"]
