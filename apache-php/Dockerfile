FROM centos:6.6
MAINTAINER Surawut Sodasak <surawut.sod@linksinnovation.com>

# -----------------------------------------------------------------------------
# Setup Middle Ware Add and enable remi repo
# -----------------------------------------------------------------------------
RUN echo "nameserver 8.8.8.8" > /etc/resolv.conf
RUN echo "nameserver 8.8.4.4" > /etc/resolv.conf

# TOOLS
RUN yum install -y curl git wget unzip

# APACHE
RUN yum install -y httpd

# PHP
RUN yum install -y php php-mysql

## CLEAN UP
RUN yum install -y yum-utils
RUN yum clean all

### Add Project
# Add /code/index.php /var/www/html/

EXPOSE 80
# Start services
CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]

