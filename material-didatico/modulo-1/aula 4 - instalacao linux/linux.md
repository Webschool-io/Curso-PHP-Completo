## Instalação no Linux

Link da vídeo aula: 

## Downloads

### VmWare Player

- https://my.vmware.com/web/vmware/free#desktop_end_user_computing/vmware_workstation_player/12_0

### CentOS Mininal

Qualquer um desses links:

- http://mirror.ci.ifes.edu.br/centos/7/isos/x86_64/CentOS-7-x86_64-Minimal-1511.iso
- http://mirror.globo.com/centos/7/isos/x86_64/CentOS-7-x86_64-Minimal-1511.iso
- http://centos.brisanet.com.br/7/isos/x86_64/CentOS-7-x86_64-Minimal-1511.iso
- http://centos.secrel.com.br/7/isos/x86_64/CentOS-7-x86_64-Minimal-1511.iso
- http://mirror.nbtelecom.com.br/centos/7/isos/x86_64/CentOS-7-x86_64-Minimal-1511.iso
- http://centos.ufes.br/7/isos/x86_64/CentOS-7-x86_64-Minimal-1511.iso 

## Comandos

sudo yum -y update

sudo yum -y install httpd

sudo firewall-cmd --permanent --add-port=80/tcp
sudo firewall-cmd --permanent --add-port=443/tcp

sudo firewall-cmd --reload

sudo systemctl start httpd
sudo systemctl enable httpd
sudo systemctl status httpd

php -v

sudo yum remove php-cli mod_php php-common

yum install epel-release

rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm

yum install php70w php70w-common

yum install php-api php-bz2 php-calendar php-ctype php-curl php-date php-exif php-fileinfo php-filter php-ftp php-gettext php-gmp php-hash php-iconv php-json php-libxml php-openssl php-pcre php-pecl-Fileinfo php-pecl-phar php-pecl-zip php-reflection php-session php-shmop php-simplexml php-sockets php-spl php-tokenizer php-zend-abi php-zip php-zlib

yum install php70w-interbase (firebird)

yum install php70w-mysql php70w-mysqlnd (mysql,mysqli)

yum install php70w-pgsql (postg)

php -v

## Php Info

<?php
phpinfo();

