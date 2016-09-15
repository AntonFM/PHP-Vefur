<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>

<ul>
  <li><a href="index.php"  <?php if ($currentPage == 'index.php') {
 echo 'id="here"'; } ?>>Heimasíða</a></li>
  <li><a href="kaupa.php"  <?php if ($currentPage == 'kaupa.php') {
 echo 'id="here"'; } ?>>Kaupa</a></li>
  <li><a href="#">Selja</a></li>
</ul>