cd /var/www/html
wp core download --allow-root
mv ~/wp-config.php /var/www/html/
echo ' ' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo '<VirtualHost *:443>' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo 'ServerName localhost' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo 'ServerAlias wgaunt.42.fr www.wgaunt.42.fr' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo 'DocumentRoot /var/www/html' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo '<Directory var/www/html>' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo 'AllowOverride All' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo '</Directory>' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo '</VirtualHost>' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo ' ' >> /etc/apache2/conf-available/php7.3-fpm.conf
echo '127.0.0.1    wgaunt.42.fr www.wgaunt.42.fr' >> /etc/hosts
wp core install --allow-root --url=wgaunt.42.fr --title='My site' --admin_user=$ADMIN_USER --admin_password=$ADMIN_PASSWORD --admin_email=mail@mail.my
wp user create --allow-root $USER umail@mail.my --user_pass=$USER_PASSWORD
chmod 755 -R /var/www/*
chown -R www-data:www-data /var/www/html/*