if ! grep -q wgaunt.42.fr /etc/hosts
then
	echo "127.0.0.1    wgaunt.42.fr www.wgaunt.42.fr" >> /etc/hosts
fi