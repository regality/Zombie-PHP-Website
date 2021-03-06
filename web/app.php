<?php

require("../brainz/config.php");
require_once("../brainz/util/util.php");

if (isset($_GET['app'])) {
   // sanitize the app name: only letters, numbers, underscores, and slashes
   $app = preg_replace('/[^0-9a-zA-Z_]/', '', $_GET['app']);  // => app_dir/foo
   if (strpos($app, '/')) {
      $app_name = substr(strrchr($app, '/'),1);  // foo
   } else {
      $app_name = $app;
   }
   $app_file = $app_root . '/' . $app . '/' . $app_name . '.php';  // => root/app/foo/foo.php
   //$app_class = str_replace(' ','', ucwords(str_replace('_', ' ', $app_name))); // app_name => AppName
   $app_class = underscore_to_class($app_name);
   if (!file_exists($app_file)) {
      die("file not found: $app_file");
   }
   include($app_file);
   if (class_exists($app_class)) {
      $app = new $app_class();
      $app->run();
   }
} else {
   echo "no app specified";
}

?>
