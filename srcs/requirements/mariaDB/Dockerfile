FROM debian:buster

MAINTAINER wgaunt <wgaunt@student.21-school.ru>

WORKDIR /var/www/html/

#install
RUN apt-get update
RUN apt-get -y install mariadb-server

RUN rm -f /etc/mysql/mariadb.conf.d/50-mysqld_safe.cnf
COPY ./src/my.cnf /etc/mysql/my.cnf
COPY ./src/init.sh ./

EXPOSE 3306

ENTRYPOINT sh init.sh