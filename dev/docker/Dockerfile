FROM php:8.3-apache

# isntall library
RUN apt-get update && \
    apt-get install -y \
        git \
        zip \
        unzip \
        libpng-dev \
        libldap2-dev \
        libzip-dev && \
    rm -rf /var/lib/apt/lists/*

ENV APACHE_DOCUMENT_ROOT /app/public
WORKDIR /app

RUN <<EOR
# Configure apache
docker-php-ext-configure ldap --with-libdir="lib/$(gcc -dumpmachine)"
docker-php-ext-install pdo_mysql gd ldap zip
pecl install xdebug
docker-php-ext-enable xdebug
a2enmod rewrite
sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Install composer
curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Use the default production configuration and update it as required
mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
sed -i 's/memory_limit = 128M/memory_limit = 512M/g' "$PHP_INI_DIR/php.ini"
EOR
