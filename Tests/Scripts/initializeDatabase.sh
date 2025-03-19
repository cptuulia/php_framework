# Here we create the database and import the database with the content, the content will be deleted.
cd /
mysql --defaults-extra-file=/var/www/config/mysq.cnf -h php_framework_mysql -uroot -proot   </var/www/Tests/Scripts/sql/createDatabases.sql
mysql --defaults-extra-file=/var/www/config/mysq.cnf -h php_framework_mysql -uroot -proot test_db_name </var/www/database/php_framework_db_name.sql
