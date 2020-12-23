FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add wget

RUN apk add grafana --repository http://dl-cdn.alpinelinux.org/alpine/edge/testing/ --no-cache
COPY ./grafana.db /usr/share/grafana/data/

CMD /usr/sbin/grafana-server --homepath=/usr/share/grafana
