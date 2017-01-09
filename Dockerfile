FROM padster83/centos7-php7-laravel
MAINTAINER patrick henry <docker@patrickhenry.co.uk>

# Update repo for php 5.6
#RUN rpm -Uvh https://mirror.webtatic.com/yum/el7/epel-release.rpm

RUN yum -y install git


RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

#install
WORKDIR /var/www/html/


RUN composer global require "laravel/installer"

RUN export PATH="$PATH:~/.composer/vendor/bin"
RUN source ~/.bashrc

WORKDIR /var/www/html

CMD chmod -R guo+w storage
CMD chmod -R gu+w storage
CMD composer install
