FROM php:8.3-fpm
LABEL authors="XeniaWeb"

WORKDIR /var/www/html

RUN apt-get update \
    && apt-get install -y \
      gnupg  \
      gosu  \
      curl  \
      ca-certificates  \
      zip  \
      unzip  \
      git  \
      supervisor  \
      sqlite3  \
      libcap2-bin  \
      libpng-dev  \
      python3  \
      dnsutils  \
      librsvg2-bin  \
      fswatch  \
      ffmpeg  \
      nano  \
    && curl -sS 'https://keyserver.ubuntu.com/pks/lookup?op=get&search=0x14aa40ec0831756756d7f66c4f4ea0aae5267a6c' | gpg --dearmor | tee /etc/apt/keyrings/ppa_ondrej_php.gpg > /dev/null \
    && echo "deb [signed-by=/etc/apt/keyrings/ppa_ondrej_php.gpg] https://ppa.launchpadcontent.net/ondrej/php/ubuntu jammy main" > /etc/apt/sources.list.d/ppa_ondrej_php.list \
    && apt-get update \
        build-essential \
        libpng-dev \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        locales \
        jpegoptim optipng pngquant gifsicle \
        libpq-dev \
        libonig-dev \
        libzip-dev

# Очищаем кэш
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Устанавливаем расширения PHP
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl

# Загружаем актуальную версию Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Создаём пользователя и группу www для приложения Laravel
#RUN groupadd -g 1000 www-data
#RUN useradd -u 1000 -ms /bin/bash -g www-data www-data

# Копируем содержимое текущего каталога в рабочую директорию
COPY . /var/www/html
#COPY --chown=www-data:www-data . /var/www/html

# Меняем пользователя на www
USER www-data

# В контейнере открываем 9000 порт и запускаем сервер php-fpm
EXPOSE 9000
CMD ["php-fpm"]
