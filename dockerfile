FROM php:8.1.13-apache

WORKDIR /var/www/html

# Copie os arquivos do projeto para o contêiner
COPY . /var/www/html

# Instale as dependências do Laravel
RUN apt-get update \
    && apt-get install -y libzip-dev zip \
    && docker-php-ext-install zip \
    && a2enmod rewrite

