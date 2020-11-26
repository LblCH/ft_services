#! /bin/bash
/usr/bin/mysql_install_db --user=mysql --datadir="/var/lib/mysql"
# Init DB
echo "CREATE DATABASE IF NOT EXISTS $DB_NAME;" | mysql -u root --skip-password
echo "CREATE USER '$DB_NAME'@'%' IDENTIFIED BY '$DB_PASS';" | mysql -u root --skip-password
echo "GRANT ALL PRIVILEGES ON wordpress.* TO '$DB_NAME'@'%' IDENTIFIED BY '$DB_PASS' WITH GRANT OPTION;" | mysql -u root --skip-password
echo "update mysql.user set plugin='mysql_native_password' where user='$DB_NAME';" | mysql -u root --skip-password
echo "DROP DATABASE test" | mysql -u root --skip-password
echo "FLUSH PRIVILEGES;" | mysql -u root --skip-password
mysql wordpress -u root --password=  < wordpress.sql

sed -i 's/skip-networking/#skip-networking/g' /etc/my.cnf.d/mariadb-server.cnf
# telegraf &
/usr/bin/mysqld_safe --datadir="/var/lib/mysql"
