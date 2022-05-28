FROM debian:buster

MAINTAINER wgaunt <wgaunt@student.21-school.ru>

WORKDIR /var/www/html/

#install
RUN apt-get update
RUN apt-get -y install wget
RUN apt-get -y install nginx

#SSL
RUN openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Moscow/L=Moscow/CN=wgaunt" -newkey rsa:2048 -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt;

#nginx
#COPY ./conf/nginx.conf /etc/nginx/conf.d
COPY ./conf/nginx.conf /etc/nginx/sites-available/wgaunt.42.fr
RUN ln -s /etc/nginx/sites-available/wgaunt.42.fr /etc/nginx/sites-enabled/wgaunt.42.fr
RUN rm -f /etc/nginx/sites-enabled/default

EXPOSE 443

RUN chown -R www-data:www-data *
RUN chmod 755 -R /var/www/*

CMD ["nginx", "-g", "daemon off;"]