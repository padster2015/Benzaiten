FROM centos:7
MAINTAINER Patrick <docker@patrickhenry.co.uk>
RUN rpm --import http://mirror.centos.org/centos/RPM-GPG-KEY-CentOS-7 \
    && rpm --import http://dl.fedoraproject.org/pub/epel/RPM-GPG-KEY-EPEL-7 \
    && rpm -Uvh http://dl.fedoraproject.org/pub/epel/7/x86_64/e/epel-release-7-5.noarch.rpm
RUN yum -y install \
deltarpm
RUN yum -y install \
yum-utils \
git \
    mysql-devel \
    mysql-libs \
    mod_ssl \
    nano \
    wget \
    && yum -y update bash \
    && rm -rf /var/cache/yum/* \
    && yum clean all

RUN cd /tmp && wget http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
RUN rpm -Uvh http://rpms.remirepo.net/enterprise/remi-release-7.rpm
RUN yum-config-manager --enable remi-php70

RUN yum -y install \
MariaDB-server \
MariaDB-client \
php.x86_64 \
 php-mbstring \
 php-mysqlnd \
 php-opcache \
    php-mysql \
    php-pear-MDB2-Driver-mysqli \
    php-pecl-memcached \
    php-xml \
 composer

RUN mkdir /root/.ssh
COPY ssh /root/.ssh
RUN chmod 600 -R /root/.ssh/ 
WORKDIR /root/

RUN eval "$(ssh-agent -s)"
CMD ssh-add /root/root/id_rsa

RUN composer global require "laravel/installer"

RUN export PATH="$PATH:~/.composer/vendor/bin"
RUN source ~/.bashrc
WORKDIR /var/www/html
RUN mkdir Benzaiten
WORKDIR Benzaiten
CMD git clone git@github.com:padster2015/Benzaiten.git .

CMD cp -a httpd.conf /etc/httpd/conf/httpd.conf

CMD composer install

CMD chmod -R gu+w storage && chmod -R guo+w storage && chmod 777 -R *

EXPOSE 80 443

CMD /usr/sbin/httpd -c "ErrorLog /dev/stdout" -DFOREGROUND