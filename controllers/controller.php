<?php

class Controller
{
    public function home()
      {
        require_once 'views/home.php';
      }

    public function listCars() 
        {
          require_once 'views/cars.php';
        }

    public function login() 
        {
          require_once 'views/login.php';
        }
}