#! /bin/sh
adduser -D -h /var/ftp user
echo "user:pass" | chpasswd
vsftpd /etc/vsftpd/vsftpd.conf
