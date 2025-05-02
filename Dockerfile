FROM php:8.1-cli

# Install mysqli extension
RUN docker-php-ext-install mysqli

WORKDIR /var/www/html
COPY public /var/www/html

CMD ["php", "-S", "0.0.0.0:10000"]
