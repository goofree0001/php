https://qiita.com/sano1202/items/6021856b70e4f8d3dc3d

sudo apt-get install php8.1-dom
sudo apt-get install php-mysql

sudo apt install mysql-server
sudo apt install mysql-client
sudo apt-get install php-mysql

sudo apt purge mysql-server
sudo apt purge mysql-client
sudo apt-get purge php-mysql

sudo mysql_secure_installation




composer install
composer create-project laravel/laravel sample
cd sample

composer update --no-scripts


sudo mysqld_safe --skip-grant-tables
ps -ax |grep mysqld
kill -9 

update mysql.user set authentication_string=null where user='root';
set password for 'root'@'localhost' = '';

sudo touch /var/run/mysqld/mysqld.sock 
sudo chown mysql:mysql /var/run/mysqld/mysqld.sock 
sudo chmod 777 /var/run/mysqld/mysqld.sock 















php artisan make:migration create_books_table --create=books
