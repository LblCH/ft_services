FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add wget nginx supervisor php7 php7-fpm php7-opcache php7-gd php7-mysqli php7-zlib php7-curl php7-mbstring php7-json php7-session

RUN adduser -D -g 'www' www
RUN mkdir /www && mkdir -p /run/nginx
RUN wget https://wordpress.org/latest.tar.gz && tar -xvf latest.tar.gz \
&& chmod 755 -R wordpress && mv wordpress/* /www
RUN chown -R www:www /www

COPY ./nginx.conf /etc/nginx/conf.d/default.conf
COPY ./supervisord.conf /etc/supervisord.conf
COPY ./start_server.sh .
RUN chmod +x ./start_server.sh

EXPOSE 5050

# Start server
CMD sh start_server.sh
