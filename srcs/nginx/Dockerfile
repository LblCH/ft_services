FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add nginx openssl openssh supervisor

# Copy configs
COPY ./nginx.conf /etc/nginx/conf.d/default.conf
COPY ./supervisord.conf /etc/supervisord.conf

RUN openssl req -x509 -nodes -days 365 -newkey rsa:2048 -subj '/C=RU/ST=Kazan/L=Kazan/O=42/CN=ztawanna' -keyout /etc/ssl/certs/self.key -out /etc/ssl/certs/self.crt

EXPOSE 80 443
COPY ./start_server.sh ./
RUN chmod +x ./start_server.sh
RUN mkdir -p /run/nginx

# Start server
CMD sh start_server.sh
