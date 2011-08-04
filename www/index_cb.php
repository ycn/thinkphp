<?php
foreach ($_GET as $key => $val) {
  if ($key != 's') {
    $_GET['s'] .= "/$key/$val";
    unset($_GET[$key]);
  }
}
require('./ThinkPHP/ThinkPHP.php');
App::run();
?>
