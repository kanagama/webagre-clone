FROM composer:2

RUN apk update && apk --no-cache add icu-dev

RUN docker-php-ext-install intl
