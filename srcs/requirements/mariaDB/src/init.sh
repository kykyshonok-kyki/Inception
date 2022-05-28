sed -i "s/bind-ad/\#bind-ad/" "/etc/mysql/mariadb.conf.d/50-server.cnf"
sed -i "s/\#port /port  /" "/etc/mysql/mariadb.conf.d/50-server.cnf"

#mysql_install_db --user=mysql --basedir=/usr --datadir=/var/lib/mysql
if [ ! -d /var/lib/mysql ]
then
	mysql_install_db
fi

#Create wordpress database if it is not exist
if [ ! -d /var/lib/mysql/wordpress ]
then
	service mysql start
	echo "CREATE DATABASE IF NOT EXISTS wordpress;"| mysql -u root
    echo "CREATE USER IF NOT EXISTS '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_PASSWORD';"| mysql -u root
	echo "GRANT ALL PRIVILEGES ON wordpress.* TO '$MYSQL_USER'@'%' WITH GRANT OPTION;"| mysql -u root
	echo "FLUSH PRIVILEGES;"| mysql -u root
	echo "SET PASSWORD FOR 'root'@'localhost' = PASSWORD('$MYSQL_ROOT_PASSWORD')" | mysql -u root
	service mysql stop
fi

mysqld_safe