<?php

require_once 'models/User.php';
require_once 'models/Service.php';
require_once 'models/Services.php';
require_once 'models/Car.php';
require_once 'models/Cars.php';
require_once 'models/Cars_Model.php';
require_once 'models/Brand.php';
require_once 'models/Day.php';
require_once 'models/Days.php';
require_once 'models/Timetable.php';
require_once 'models/Equipment.php';
require_once 'models/Car_Equipment.php';
require_once 'models/Car_Equipments.php';
require_once 'models/Option.php';
require_once 'models/Car_Option.php';
require_once 'models/Car_Options.php';

class Controller
{
    private User $userObject;
    private Service $serviceObject;
    private Services $servicesObject;
    private Car $carObject;
    private Cars $carsObject;
    private Cars_Model $carsModelObject;
    private Brand $brandObject;
    private Day $dayObject;
    private Days $daysObject;
    private Timetable $timetableObject;
    private Equipment $equipmentObject;
    private CarEquipment $carEquipmentObject;
    private CarEquipments $carEquipmentsObject;
    private Option $optionObject;
    private CarOption $carOptionObject;
    private CarOptions $carOptionsObject;

  public function __construct()
  {
    $this->userObject = new User();
    $this->serviceObject = new Service();
    $this->servicesObject = new Services();
    $this->carObject = new Car();
    $this->carsObject = new Cars();
    $this->carsModelObject = new Cars_Model();
    $this->brandObject = new Brand();
    $this->dayObject = new Day();
    $this->daysObject = new Days();
    $this->timetableObject = new Timetable();
    $this->equipmentObject = new Equipment();
    $this->carEquipmentObject = new CarEquipment();
    $this->carEquipmentsObject = new CarEquipments();
    $this->optionObject = new Option();
    $this->carOptionObject = new CarOption();
    $this->carOptionsObject = new CarOptions();
  }  
  
    public function home()
        {
            $services = $this->servicesObject->getServices();
            $days = $this->daysObject->getDays();
            require_once 'views/home.php';
        }

    public function listCars() 
        {
            $cars = $this->carsObject->getCars();
            $days = $this->daysObject->getDays();
            require_once 'views/cars.php';
        }

    public function detailCars() 
        {
            $car = null;
            if (isset($_GET['id']) && is_numeric($_GET['id'])) 
            {
                $car = $this->carObject->getcarsDetail(($_GET['id']));
            }
            $brand = $this->brandObject->getBrand($car->getCarBrandId());
            $model = $this->carsModelObject->getModel($car->getCarModelId());
            $carEquipments = $this->carEquipmentsObject->getCarEquipmentList($car->getCarId());
            $carOptions = $this->carOptionsObject->getCarOptionList($car->getCarId());
            $days = $this->daysObject->getDays();
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
                header("location:?page=admin");
            }
            require_once 'views/user-interface-admin.php';
        }

        public function userInterfaceStaff() 
        {
            session_start();
            if($_SESSION["autoriser"]!="oui"){
                header("location:?page=staff");
            }
            require_once 'views/user-interface-staff.php';
        }
}