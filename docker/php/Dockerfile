FROM php:8.1.2-fpm

#рабочая директория (место, куда по умолчанию попадаешь при входе в контейнер)
WORKDIR /var/www

#установка библиотек
RUN apt-get update && apt-get install -y \
    libpng-dev \
    zlib1g-dev \
    git \
    libzip-dev \
    zip \
    icu-devtools libicu-dev
RUN curl -sL https://getcomposer.org/installer | php -- --install-dir /usr/bin --filename composer
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install gd
RUN docker-php-ext-install zip

#добавление нового пользователя с правами доступа на папку
RUN useradd -ms /bin/bash admindk
RUN chown -R admindk:admindk ./
RUN chmod 755 ./
USER admindk

#команда, которая будет выполнена после запуска контейнера
CMD ["php-fpm"]

#порт, на котором будет работать php
EXPOSE 9000