<?php

$domain = $_SERVER['SERVER_NAME'];
if ($domain == 'zombie-php.pagodabox.com') {
   $zombie_root = '/var/www';
   $app_root = '/var/www/apps';
   $web_root = '';
   $db_server = 'localhost:/tmp/mysql/annamarie.sock';
   $db_user = 'denese';
   $db_pass = 'yfSLiEad';
   $database = 'annamarie';
} else {
   $zombie_root = '/var/www/Zombie-PHP-Website';
   $app_root = '/var/www/Zombie-PHP-Website/apps';
   $web_root = '';
   $db_server = 'localhost';
   $db_user = 'mysql';
   $db_pass = 'sql5rocks';
   $database = 'zombie';
}

$db_class = 'MySqlConnection';
$db_file = 'sql/mysql_connection.php';
$sess_file = 'session/sql_session.php';
$sess_class = 'SqlSession';

?>
