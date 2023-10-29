<?php

require_once 'controllers/controller.php';

$controller = new Controller();

if (isset($_GET['page'])) {
  switch ($_GET['page']) {
      case 'cars': 
        $controller->listCars();
          break;
      case 'cardetail': 
        $controller->detailCars();
          break;
      case 'login':
          $controller->login();
          break;
      case 'admin':
        $controller->userInterfaceAdmin();
        break;
      case 'staff':
        $controller->userInterfaceStaff();
        break;
      default:
          $controller->home();
          break;
  }
} else { 
  $controller->home();  
  //$controller->layoutFooter();
}

