FROM php:8.1.9-apache

WORKDIR /var/www/html

# PHP実行・デバッグ用、MySQL連携用、作業用で必要なライブラリをインストール
RUN apt-get update \
    && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    libxml2 \
    zlib1g-dev \
    openssl \
    vim \
    && docker-php-ext-install \
    pdo_mysql \
    mbstring \
    zip \
    bcmath

RUN docker-php-ext-install opcache

# 設定ファイルをコピー
COPY . /var/www/html/
COPY .docker/apache/php.ini /usr/local/etc/php/php.ini
COPY .docker/apache/cert.pem /usr/local/etc/php/cert.pem
COPY .docker/apache/apache2.conf /etc/apache2/apache2.conf
RUN chmod -R 777 /var/www/html/storage/
RUN a2enmod rewrite
