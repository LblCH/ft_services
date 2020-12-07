FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add wget

RUN wget https://dl.grafana.com/oss/release/grafana-7.3.4.linux-amd64.tar.gz \
	&& tar -zxvf grafana-7.3.4.linux-amd64.tar.gz

WORKDIR	./grafana-7.3.4/bin/

ENTRYPOINT	./grafana-server
