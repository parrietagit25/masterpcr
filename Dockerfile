FROM php:8.0-apache

# Actualizar paquetes existentes en el contenedor
RUN apt-get update 

# Instalar dependencias necesarias para PHP, Tesseract y GD
RUN apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libtesseract-dev \
    libleptonica-dev \
    tesseract-ocr-eng \
    tesseract-ocr-spa \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    nano

# Configurar e instalar las extensiones PHP necesarias para Composer
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install zip pdo pdo_mysql gd

# Descargar e instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
