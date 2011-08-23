<?php
require_once(__DIR__ . "/../../brainz/app/app.php");

class Menu extends App {
   public function index_run($request) {
      if ($this->session->is_set('username')) {
         $this->title = "Welcome, " . $this->session->get('username');
      } else {
         $this->title = "";
      }

      $this->apps = array(
         array("app" => "welcome", "name" => "Home", "class" => "active"),
         array("app" => "tutorials", "name" => "Tutorials"),
         array("app" => "download", "name" => "Download"),
         array("app" => "news", "name" => "News"),
         array("app" => "docs", "name" => "Documentation"),
         array("app" => "contribute", "name" => "Contribute"),
         array("app" => "contact", "name" => "Contact")
      );
      if ($this->in_group('admin')) {
         array_push($this->apps, array("app" => "users", "name" => "Users"));
         array_push($this->apps, array("app" => "groups", "name" => "Groups"));
         array_push($this->apps, array("app" => "console", "name" => "Console"));
      }
   }
}

?>
