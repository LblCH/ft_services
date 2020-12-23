FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add influxdb
RUN apk add telegraf --repository http://dl-cdn.alpinelinux.org/alpine/edge/testing/ --no-cache
COPY telegraf.conf	/etc/telegraf/telegraf.conf
COPY start_server.sh /
RUN chmod +x ./start_server.sh
RUN	./usr/bin/telegraf -sample-config --input-filter docker --output-filter influxdb > /etc/telegraf/telegraf.conf

EXPOSE 8086

VOLUME ["/var/lib/influxdb"]

ENTRYPOINT sh start_server.sh
