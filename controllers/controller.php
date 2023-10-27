<?php

//require_once 'models/Missions.php';
//require_once 'models/Mission.php';

class Controller
{
    //private Missions $missionsObject;
    //private Mission $missionObject;

  //public function __construct()
  //{
    //$this->missionsObject = new Missions();
    //$this->missionObject = new Mission();
  //}

    public function home()
        {
            require_once 'views/home.php';
        }

    public function listCars() 
        {
            require_once 'views/cars.php';
        }

    public function detailCars() 
        {
            require_once 'views/carsdetails.php';
        }

    public function login()
        {
           session_start();
           if(isset($_POST['email']) && isset($_POST['password']))
           {
             $_SESSION['email'] = $_POST['email'];
             $user = $this->userObject->getLogin(($_POST['email']), ($_POST['password']));
           }
           require_once 'views/login.php';
         }
     
    public function logout()
        {
           session_start();
           $_SESSION = [];
           session_destroy();
           header("location:?page=login");
           exit();
        } 

    public function userInterface() 
        {
            session_start();
            if($_SESSION["autoriser"]!="oui"){
                header("location:?page=login");
            }
            require_once 'views/user-interface.php';
        }
}