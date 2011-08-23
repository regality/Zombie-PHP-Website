<?php
require_once(__DIR__ . "/../../brainz/app/app.php");

class Menu extends App {
   public function index_run($request) {
      if ($this->session->is_set('username')) {
         $this->title = "Welcome, " . $this->session->get('username');
      } else {
         $this->title = "Menu";
      }

      $this->apps['welcome'] = array("name" => "Home");
      $this->apps['tutorials'] = array("name" => "Tutorials");
      $this->apps['download'] = array("name" => "Download");
      $this->apps['docs'] = array("name" => "Documentation");
      $this->apps['news'] = array("name" => "News");
      $this->apps['contribute'] = array("name" => "Contribute");
      $this->apps['contact'] = array("name" => "Contact");
      if ($this->in_group('admin')) {
         $this->apps['users'] = array("name" => "Users");
         $this->apps['groups'] = array("name" => "Groups");
         $this->apps['console'] = array("name" => "Console");
      }
      $this->preload = (isset($request['default_app']) ? $request['default_app'] : "welcome");
      $this->preload_action = (isset($request['default_action']) ? $request['default_action'] : "index");
   }
}

?>
