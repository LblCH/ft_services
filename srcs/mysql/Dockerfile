FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add mariadb mariadb-client

COPY ./start_server.sh .
RUN chmod +x ./start_server.sh
COPY my.cnf /etc/mysql/
COPY wordpress.sql .
VOLUME /var/lib/mysql

EXPOSE 3306

# Start server
CMD sh start_server.sh
