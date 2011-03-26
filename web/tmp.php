<?php

require("../brainz/config.php");
require("../brainz/sql/mysql_connection.php");
$query = "CREATE TABLE session (
id char(40) NOT NULL PRIMARY KEY,
data varchar(8192),
last_access datetime)";
$sql = new MySqlConnection($db_server, $db_user, $db_pass, $database);
$sql->exec($query);

?>
