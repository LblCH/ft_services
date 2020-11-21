FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add mysql mysql-client nginx supervisor

RUN mkdir -p /etc/telegraf
COPY ./supervisord.conf /etc/supervisord.conf

COPY ./start_server.sh .
COPY ./mysql.sh .
RUN chmod +x ./start_server.sh
RUN chmod +x ./mysql.sh

EXPOSE 3306
# Start server
CMD sh mysql.sh
