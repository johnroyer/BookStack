FROM php:8.3-apache

# isntall library
RUN apt-get update && \
    apt-get install -y \
        curl \
        git \
        zip \
        unzip \
        libpng-dev \
        libldap2-dev \
        libzip-dev && \
    rm -fr /var/cache/apk/* && \
    rm -fr /tmp/*

# install PHP extensions
RUN ( curl -sSLf https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions -o - || echo 'return 1' ) | sh -s \
      gd ldap pdo_mysql xdebug zip

# install composer
COPY --from=composer/composer:lts /usr/bin/composer /usr/bin/composer

ENV APACHE_DOCUMENT_ROOT /app/public
WORKDIR /app

RUN <<EOR
# Configure apache
a2enmod rewrite
sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Use the default production configuration and update it as required
mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
sed -i 's/memory_limit = 128M/memory_limit = 512M/g' "$PHP_INI_DIR/php.ini"
EOR
