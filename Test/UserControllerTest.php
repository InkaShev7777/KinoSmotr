<?php
use db\Controllers\UserController;
use db\db;
use db\Models\User;
require_once '/Users/ilyaschevchenko/PhpstormProjects/KinoSmotrPHP/db/Controllers/UserController.php';
require_once '/Users/ilyaschevchenko/PhpstormProjects/KinoSmotrPHP/db/Models/User.php';
require_once '/Users/ilyaschevchenko/PhpstormProjects/KinoSmotrPHP/db/db.php';
    class UserControllerTest{
        private $controller;
        public function __construct()
        {
            $this->controller = new UserController(db::getInstance());
        }
        public function testRegistrationUser(){
            $user = new User(1,'test2929','test2929',1);
            if($this->controller->Registration($user) == true){
                echo "Registrate";
            }
            else{
                echo "Error Registrate";
            }
        }
        public function testAuthentication(){
            $user = new User(1,'test2929','test2929',1);
            if($this->controller->Authentication($user->getLogin(),$user->getPass()) == true){
                echo "Authenticate!!!";
            }
            else{
                echo "Error Authenticate";
            }
        }
    }

    $test = new UserControllerTest();
    $test->testRegistrationUser();
    echo "<br>";
    $test->testAuthentication();
?>