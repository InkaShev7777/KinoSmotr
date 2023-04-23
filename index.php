<?php
include_once 'ORM/Objects/Role.php';
include_once 'ORM/Objects/Genre.php';
include_once 'ORM/Controllers/UserController.php';
include_once 'ORM/Objects/User.php';
include_once 'ORM/db.php';
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