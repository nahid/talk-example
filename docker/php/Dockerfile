FROM php:7.1.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    zip \
    libfreetype6-dev \
        libmcrypt-dev \
        supervisor \
        libpng12-dev \
        libjpeg-dev \
        libpng-dev \
        vim \
    && docker-php-ext-install iconv mcrypt pdo_mysql \
    && docker-php-ext-configure gd \
        --enable-gd-native-ttf \
        --with-freetype-dir=/usr/include/freetype2 \
        --with-png-dir=/usr/include \
        --with-jpeg-dir=/usr/include \
    && docker-php-ext-install gd \
    && docker-php-ext-install mbstring \
    && docker-php-ext-enable opcache gd

ADD talk-worker.conf /etc/supervisor/conf.d/talk-worker.conf

#WORKDIR /var/www/html

RUN curl -sS https://getcomposer.org/installer | \
php -- --install-dir=/usr/bin/ --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER=1


ENTRYPOINT ["./docker/php/init.sh"]
