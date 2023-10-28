<?php

require_once 'models/User.php';
require_once 'models/Service.php';
require_once 'models/Services.php';
require_once 'models/Car.php';
require_once 'models/Cars.php';
require_once 'models/ModelCar.php';
require_once 'models/Brand.php';

class Controller
{
    private User $userObject;
    private Service $serviceObject;
    private Services $servicesObject;
    private Car $carObject;
    private Cars $carsObject;
    private Model $modelCarObject;
    private Brand $brandObject;

  public function __construct()
  {
    $this->userObject = new User();
    $this->serviceObject = new Service();
    $this->servicesObject = new Services();
    $this->carObject = new Car();
    $this->carsObject = new Cars();
    $this->modelCarObject = new Model();
    $this->brandObject = new Brand();
  }

    public function home()
        {
            $services = $this->servicesObject->getServices();
            require_once 'views/home.php';
        }

    public function listCars() 
        {
            $cars = $this->carsObject->getCars();
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

    public function userInterfaceAdmin() 
        {
            session_start();
            if($_SESSION["autoriser"]!="oui"){
                header("location:?page=login");
            }
            require_once 'views/user-interface-admin.php';
        }

        public function userInterfaceStaff() 
        {
            session_start();
            if($_SESSION["autoriser"]!="oui"){
                header("location:?page=login");
            }
            require_once 'views/user-interface-staff.php';
        }
}