FROM alpine:latest

# Update and install
RUN apk update && apk upgrade
RUN apk add vsftpd openssl

RUN		openssl req -x509 -nodes -days 365 -newkey rsa:1024 -subj \
		/C=RU/ST=Kazan/L=Kazan/O=42/OU=User/CN=ztawanna/emailAddress=ztawanna@42.fr \
		-keyout /etc/vsftpd/vsftpd.pem -out /etc/vsftpd/vsftpd.pem

COPY ./start_server.sh .
RUN chmod +x ./start_server.sh
COPY vsftpd.conf /etc/vsftpd/
RUN mkdir /user
EXPOSE 20 21 30000

# Start server
CMD sh start_server.sh
