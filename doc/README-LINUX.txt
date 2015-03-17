# Installer les paquets suivants : 
- apache2
- php5
- php5-gd
- php5-curl
- php5-mcrypt
- mysql-server
- mysql-client

# Activer php5-mcrypt
sudo php5enmod mcrypt
sudo /etc/init.d/apache2 restart

# Suprimer le fichier /var/www/html/index.html
# Télécharger mangento au site : https://www.magentocommerce.com/products/downloads/magento/
# et extraire son contenu dans /var/www/html

# Créer un hostname local 
# Ajouter l'entrée suivante à /etc/hosts
127.0.0.1 ecommercelocalsite.com

# Créer une bd que magento remplira
mysql -u <mysql_username> -p
mysql> CREATE DATABASE magento

# Ouvrir un navigateur vers localhost, suivre l'installateur