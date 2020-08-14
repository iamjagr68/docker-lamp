FROM php:7.4.9-apache

# each RUN statement creates a new layer
# fewer layers can produce a more efficient file system

# xdebug is enabled, but not configured.  Use the XDEBUG_CONFIG env variable
RUN set -eux; \
    docker-php-ext-install pdo pdo_mysql mysqli; \
    pecl install xdebug-2.9.6; \
    docker-php-ext-enable xdebug;

