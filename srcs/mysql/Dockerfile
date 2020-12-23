FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add mariadb mariadb-client openrc

RUN mkdir -p /run/mysqld/
COPY start_server.sh .
RUN chmod +x ./start_server.sh
COPY my.cnf /etc/
COPY wordpress.sql .
VOLUME /var/lib/mysql
VOLUME [ “/sys/fs/cgroup” ]

EXPOSE 3306

# Start server
CMD sh start_server.sh
