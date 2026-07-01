FROM php:8.2-fpm-alpine

WORKDIR /var/www/html

RUN apk add --no-cache \
        bash \
        curl \
        git \
        icu-dev \
        libpng-dev \
        libzip-dev \
        oniguruma-dev \
        unzip \
        zip \
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
        bcmath \
        exif \
        intl \
        mysqli \
        pdo_mysql \
        zip \
    && apk del --no-cache oniguruma-dev

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . /var/www/html

RUN composer install --no-interaction --no-progress --prefer-dist --optimize-autoloader

RUN chown -R www-data:www-data /var/www/html

CMD ["php-fpm"]