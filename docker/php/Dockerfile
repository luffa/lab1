# ./docker/php/Dockerfile
FROM php:7-fpm-alpine

RUN apk update && apk add build-base
RUN apk add --no-cache libpng libpng-dev && docker-php-ext-install gd mysqli pdo_mysql pdo && apk del libpng-dev
#RUN apk add --no-cache php7.2-mysqli php7.2-pdo_mysql php7.2-pdo php7.2-gd

#RUN docker-php-ext-install opcache

#RUN curl -o /tmp/composer-setup.php https://getcomposer.org/installer \
#&& curl -o /tmp/composer-setup.sig https://composer.github.io/installer.sig \
# Make sure we're installing what we think we're installing!
#&& php -r "if (hash('SHA384', file_get_contents('/tmp/composer-setup.php')) !== trim(file_get_contents('/tmp/composer-setup.sig'))) { unlink('/tmp/composer-setup.php'); echo 'Invalid installer' . PHP_EOL; exit(1); }" \
#&& php /tmp/composer-setup.php --no-ansi --install-dir=/usr/local/bin --filename=composer --snapshot \
#&& rm -f /tmp/composer-setup.*

# COPY docker/php/opcache.ini /usr/local/etc/php/conf.d/opcache.ini

# COPY app /usr/src/app

WORKDIR /usr/src/app
#install usermod
#RUN echo http://dl-2.alpinelinux.org/alpine/edge/community/ >> /etc/apk/repositories
#RUN apk --no-cache add shadow && usermod -u 1000 www-data

#RUN composer install --no-plugins --no-scripts

#ENV PATH="~/.composer/vendor/bin:./vendor/bin:${PATH}"

#RUN usermod -u 1000 www-data
#RUN chown -R www-data:www-data /var/cache
#RUN chown -R www-data:www-data /var/log
EXPOSE 9000
CMD ["php-fpm","--nodaemonize"]