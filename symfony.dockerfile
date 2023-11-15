FROM php:7.3-fpm


COPY custom-php.ini /usr/local/etc/php/conf.d/



WORKDIR /var/www/symfony


# Install dependencies and Composer
RUN apt-get update && apt-get install -y \
git \
unzip \
&& rm -rf /var/lib/apt/lists/* \
&& curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.10.22

# Create var directory and set permissions
RUN cd /var/www/symfony && mkdir -p var/cache var/log && chmod -R 777 var
# Copy the current directory contents into the container at /var/www/html
COPY ./fixbug/ /var/www/symfony/


CMD ["php-fpm"]
