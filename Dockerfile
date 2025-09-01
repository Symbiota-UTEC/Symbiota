FROM php:8.3-apache

# COPY symbiota/ /var/www/html/

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libonig-dev \
    libcurl4-openssl-dev \
    git \
    unzip \
    tesseract-ocr \
    tesseract-ocr-eng \
    tesseract-ocr-spa \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install mysqli gd mbstring zip exif curl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN curl -fsSL -o go-pear.phar https://pear.php.net/go-pear.phar \
    && php go-pear.phar \
    && rm go-pear.phar \
    && pear channel-update pear.php.net \
    && pear install -f -o Image_Barcode2

# Configure PHP limits
RUN { \
    echo "upload_max_filesize = 100M"; \
    echo "post_max_size = 100M"; \
    echo "max_input_vars = 2000"; \
    echo "memory_limit = 256M"; \
} > /usr/local/etc/php/conf.d/uploads.ini

RUN a2enmod rewrite

RUN mkdir -p /var/www/symbiota-tmp /var/www/symbiota-media

RUN chown -R www-data:www-data /var/www/symbiota-tmp /var/www/symbiota-media

EXPOSE 80
CMD ["apache2-foreground"]
