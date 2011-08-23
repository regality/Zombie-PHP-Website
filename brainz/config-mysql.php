<?php

$domain = $_SERVER['SERVER_NAME'];
if ($domain == 'zombie-php.pagodabox.com') {
   $zombie_root = '/var/www';
   $app_root = '/var/www/apps';
   $web_root = '';
   $db_host = 'localhost:/tmp/mysql/annamarie.sock';
   $db_user = 'denese';
   $db_pass = 'yfSLiEad';
   $database = 'annamarie';
   $sess_file = $zombie_root . '/brainz/session/sql_session.php';
   $sess_class = 'SqlSession';
} else {
   $zombie_root = '/var/www/Zombie-PHP-Website';
   $app_root = '/var/www/Zombie-PHP-Website/apps';
   $web_root = '';
   $db_host = 'localhost';
   $db_user = 'mysql';
   $db_pass = 'sql5rocks';
   $database = 'zombie';
   $sess_file = $zombie_root . '/brainz/session/php_session.php';
   $sess_class = 'PhpSession';
}

$db_class = 'MySqlConnection';
$db_file = 'sql/mysql_connection.php';

?>
