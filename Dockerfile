FROM php:8.1-fpm-buster

# Add composer project bin to path.
ENV PATH="/var/www/html/vendor/bin:${PATH}"

# Install libraries.
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install --no-install-recommends -y \
    libzip-dev zip unzip && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Install composer.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
