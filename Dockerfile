FROM php:8.0-fpm

# 安裝系統套件
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev \
    libxml2-dev libpq-dev nginx supervisor \
    && docker-php-ext-install pdo pdo_pgsql pgsql mbstring exif pcntl bcmath gd \
    && apt-get clean

# 安裝 Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# 複製專案
COPY . .

# 安裝 PHP 套件
RUN composer install --optimize-autoloader --no-dev

# 設定資料夾權限
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# 複製 nginx 設定
COPY docker/nginx.conf /etc/nginx/sites-available/default

# 複製 supervisor 設定
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

EXPOSE 80

COPY docker/start.sh /start.sh
RUN chmod +x /start.sh
CMD ["/start.sh"]