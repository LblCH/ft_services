#! /bin/sh
# Init DB
/usr/bin/mysql_install_db --user=mysql --datadir="/var/lib/mysql"
/usr/bin/mysqld_safe --datadir="/var/lib/mysql"

sleep (2)
echo "CREATE DATABASE IF NOT EXISTS $DB_NAME;" | mysql -u root
echo "CREATE USER '$DB_USER'@'%' IDENTIFIED BY '$DB_PASS';" | mysql -u root
echo "GRANT ALL PRIVILEGES ON *.* TO '$DB_USER'@'%' IDENTIFIED BY '$DB_PASS' WITH GRANT OPTION;" | mysql -u root
echo "update mysql.user set plugin='mysql_native_password' where user='$DB_USER';" | mysql -u root
echo "DROP DATABASE test" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
mysql wordpress -u root --password=  < wordpress.sql

sed -i 's/skip-networking/#skip-networking/g' /etc/my.cnf.d/mariadb-server.cnf
# telegraf &
