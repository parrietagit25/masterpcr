FROM php:8.0-apache

# Instalar dependencias y habilitar módulos de Apache
RUN apt-get update && \
    apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    libtesseract-dev \
    libleptonica-dev \
    tesseract-ocr-eng \
    tesseract-ocr-spa \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    nano && \
    a2enmod ssl && \
    a2ensite default-ssl

# Instalar extensiones de PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install zip pdo pdo_mysql gd

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar archivos del certificado
COPY 1599616341.grupopcr.com.pa.crt /etc/apache2/ssl/1599616341.grupopcr.com.pa.crt
COPY 1599616341.grupopcr.com.pa.key /etc/apache2/ssl/1599616341.grupopcr.com.pa.key
COPY 1599616341.grupopcr.com.pa.ca-bundle /etc/apache2/ssl/1599616341.grupopcr.com.pa.ca-bundle

# Configurar el sitio SSL en Apache
RUN echo '<VirtualHost *:443>' > /etc/apache2/sites-available/default-ssl.conf && \
    echo '    DocumentRoot /var/www/html' >> /etc/apache2/sites-available/default-ssl.conf && \
    echo '    SSLEngine on' >> /etc/apache2/sites-available/default-ssl.conf && \
    echo '    SSLCertificateFile /etc/apache2/ssl/1599616341.grupopcr.com.pa.crt' >> /etc/apache2/sites-available/default-ssl.conf && \
    echo '    SSLCertificateKeyFile /etc/apache2/ssl/1599616341.grupopcr.com.pa.key' >> /etc/apache2/sites-available/default-ssl.conf && \
    echo '    SSLCertificateChainFile /etc/apache2/ssl/1599616341.grupopcr.com.pa.ca-bundle' >> /etc/apache2/sites-available/default-ssl.conf && \
    echo '</VirtualHost>' >> /etc/apache2/sites-available/default-ssl.conf

# Copiar los archivos PHP a la ruta correcta
COPY ./php /var/www/html

EXPOSE 80 443
