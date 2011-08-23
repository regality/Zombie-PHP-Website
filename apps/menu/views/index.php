<h2 class="menu"><?= $title ?></h2>
<?php foreach ($apps as $app): ?>
   <div class="item app <?= (isset($app['class']) ? $app['class'] : '') ?>" app="<?= $app['app'] ?>">
      <?= $app['name'] ?>
   </div>
<?php endforeach ?>
<?php if ($session->is_set("username")): ?>
   <div class="item app" id="logout">
      Logout
   </div>
<?php endif ?>
