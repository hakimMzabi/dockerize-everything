FROM lavoweb/php-5.6
COPY ./src /app
WORKDIR /app
RUN apt-get -y update && apt-get -y install composer
CMD composer dump-autoload