FROM php:5.6.30-apache
RUN apt-get update
RUN apt-get install -y unzip 
ADD http://jp2.php.net/distributions/php-5.6.30.tar.bz2 /var/www
RUN cd /var/www && tar -xvf php-5.6.30.tar.bz2 && cd /var/www/php-5.6.30/ext/pcntl && phpize && ./configure && make && make install
RUN echo "extension=/usr/local/lib/php/extensions/no-debug-non-zts-20131226/pcntl.so" >> /usr/local/etc/php/conf.d/pcntl.ini
ADD https://github.com/luo3555/php-shadowsocks-workerman/archive/master.zip /var/www
RUN cd /var/www && unzip ./master.zip && mv /var/www/php-shadowsocks-workerman-master/ /var/www/html/ && echo '<?php phpinfo() ?>' > /var/www/html/index.php
RUN apt-get clean && apt-get autoclean
RUN rm -f /var/www/master.zip && rm -f /var/www/php-5.6.30.tar.bz2 && rm -fr /var/www/php-5.6.30
EXPOSE 80