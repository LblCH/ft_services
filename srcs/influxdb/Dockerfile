FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add influxdb

VOLUME ["/var/lib/influxdb"]

ENTRYPOINT	influxd -config /etc/influxdb.conf
