<?php

require(__DIR__ . "/../brainz/config.php");
require(__DIR__ . "/../brainz/sql/mysql_connection.php");
$sql = new MySqlConnection($db_server, $db_user, $db_pass, $database);

$query = "CREATE TABLE groups (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) UNIQUE
);";
$sql->exec($query);

$query = "CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) UNIQUE,
    firstname VARCHAR(100),
    lastname VARCHAR(100),
    password CHAR(40) NOT NULL,
    groups VARCHAR(1024)
);";
$sql->exec($query);

$query = "INSERT INTO users VALUES (
   1,
   'admin',
   'rob',
   'zombie',
   'c95cf3fa429a84ffc1969dc10eac5674a9621e06',
   'a:2:{i:0;s:5:\"admin\";i:1;s:5:\"users\";}'
);";
$sql->exec($query);

$query = "INSERT INTO groups VALUES
   (1, 'admin'),
   (2, 'users');";
$sql->exec($query);

?>
