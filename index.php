<?php

use Controllers\UserController;
use Models\User;

include_once 'Models/Role.php';
include_once 'Models/Genre.php';
include_once 'Controllers/UserController.php';
include_once 'Models/User.php';
include_once 'db.php';
//$role1 = new Role(1,'test');
//$role2 = new Role(1,'test');
//$gen = new Genre(1,'tt');
//echo $role1->equals($role2);
$u = new User(0,'ilya','ilya',1);
$user = new UserController('ttt');
$user->Add($u);
$res =  $user->Select(function ($e){return $e->id == 0;});
echo $res[0];
//var_dump(db::getInstance());
?>