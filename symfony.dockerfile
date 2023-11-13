FROM php:7.3-fpm


COPY custom-php.ini /usr/local/etc/php/conf.d/
# Install dependencies and Composer
RUN apt-get update && apt-get install -y \
git \
unzip \
&& rm -rf /var/lib/apt/lists/* \
&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.10.22


WORKDIR /var/www/symfony

CMD ["php-fpm"]