FROM nginx
MAINTAINER Surawut Sodasak <surawut.sod@gmail.com>


# -----------------------------------------------------------------------------
# Add code to /var/www/code
# -----------------------------------------------------------------------------
ADD default.conf /etc/nginx/conf.d/default.conf
ADD nginx.conf /etc/nginx/nginx.conf

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]