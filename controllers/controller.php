<?php

require_once 'models/User.php';
require_once 'models/Users.php';
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
require_once 'models/Commentaries.php';
require_once 'models/Commentary.php';
require_once 'models/Right.php';
require_once 'models/Rights.php';

class Controller
{
    private User $userObject;
    private Users $usersObject;
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
    private Commentaries $commentariesObject;
    private Commentary $commentaryObject;
    private Right $rightObject;
    private Rights $rightsObject;

  public function __construct()
  {
    $this->userObject = new User();
    $this->usersObject = new Users();
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
    $this->commentariesObject = new Commentaries();
    $this->commentaryObject = new Commentary();
    $this->rightObject = new Right();
    $this->rightsObject = new Rights();
  }  
  
    public function home()
        {
            $services = $this->servicesObject->getServices();
            $days = $this->daysObject->getDays();
            $commentaries = $this->commentariesObject->getCommentaries();
            
            if(isset($_POST['addfirstname']) 
            && isset($_POST['addcommentary']) 
            && isset($_POST['addrating'])) {
            $this->commentaryObject->addCommentary(
              ($_POST['addfirstname']), 
              ($_POST['addcommentary']), 
              ($_POST['addrating']));
            }
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

            //staff
            if(isset($_POST['addstafffirstname']) 
            && isset($_POST['addstafflastname'])
            && isset($_POST['addstaffemail'])
            && isset($_POST['addstaffpassword'])
            && isset($_POST['addstaffright'])) {
            $this->userObject->addUser(
            ($_POST['addstafffirstname']), 
            ($_POST['addstafflastname']),
            ($_POST['addstaffemail']),
            ($_POST['addstaffpassword']),
            ($_POST['addstaffright']));
            }
            $rights = $this->rightsObject->getRights();
            if(isset($_POST['deleteStaff'])){
                $this->userObject->deleteUser($_POST['deleteStaff']);
            }
            if(isset($_POST['updateStaff'])){
                $userById = $this->userObject->getUserDetailById($_POST['updateStaff']);
            }
            if(isset($_POST['updatestafffirstname'])  
                && isset($_POST['updatestafflastname'])
                && isset($_POST['updatestaffemail'])
                && isset($_POST['updatestaffpassword'])
                && isset($_POST['updatestaffright'])){
                $this->userObject->updateUser(
                $_POST['updatestaffid'], 
                $_POST['updatestafffirstname'],
                $_POST['updatestafflastname'], 
                $_POST['updatestaffemail'], 
                $_POST['updatestaffpassword'],  
                $_POST['updatestaffright']);
                }
            $users = $this->usersObject->getUsers();

            //services
            if(isset($_POST['addname']) 
            && isset($_POST['adddescription'])) {
            $this->serviceObject->addService(
              ($_POST['addname']), 
              ($_POST['adddescription']));
            }
            if(isset($_POST['delete'])){
                $this->serviceObject->deleteService($_POST['delete']);
            }
            if(isset($_POST['update'])){
                $serviceById = $this->serviceObject->getserviceDetailById($_POST['update']);
              }
              if(isset($_POST['updatename'])  
                && isset($_POST['updatedescription'])){
                $this->serviceObject->updateService(
                  $_POST['updateid'], 
                  $_POST['updatename'], 
                  $_POST['updatedescription']);
                }
            $services = $this->servicesObject->getServices();

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