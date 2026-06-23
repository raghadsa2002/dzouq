FROM php:8.2-apache

# تثبيت الامتدادات المطلوبة لارافل
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql gd bcmath

# تفعيل مود Apache Rewrite للمسارات (Routes)
RUN a2enmod rewrite

# تغيير الـ Document Root ليوجه على مجلد public حق لارافل
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ ملفات المشروع داخل السيرفر
WORKDIR /var/www/html
COPY . .

# تثبيت مكتبات الـ PHP (Composer)
RUN composer install --no-dev --optimize-autoloader --no-interaction

# ضبط الصلاحيات للمجلدات الأساسية
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80