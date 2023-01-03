FROM debian:buster

RUN apt-get update -y
RUN apt-get install -y dumb-init
RUN apt-get install -y mariadb-server

EXPOSE 3306

COPY ./conf/50-server.cnf /etc/mysql/mariadb.conf.d/
COPY ./tools /var/www/

ENTRYPOINT ["/usr/bin/dumb-init", "--"]
RUN service mysql start && mysql < /var/www/initial_db.sql && rm -f /var/www/initial_db.sql;

CMD ["mysqld"]
