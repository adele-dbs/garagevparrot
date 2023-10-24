<?php

require_once 'controllers/controller.php';

$controller = new Controller();

if (isset($_GET['page'])) {
  switch ($_GET['page']) {
      case 'cars':
          $controller->listCars();
          break;
      case 'login':
          $controller->login();
          break;
      default:
          $controller->home();
          break;
  }
} else {
  $controller->home();
}

