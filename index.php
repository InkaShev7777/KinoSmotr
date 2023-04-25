<?php

use db\Controllers\UserController;
use db\Models\User;
use db\Controllers\FilmController;
use db\db;

include_once 'db/Models/Role.php';
include_once 'db/Models/Genre.php';
include_once 'db/Controllers/UserController.php';
include_once 'db/Models/User.php';
include_once 'db/db.php';
include_once 'db/Controllers/FilmController.php';
include_once 'api/Public/Movies.php';
//$role1 = new Role(1,'test');
//$role2 = new Role(1,'test');
//$gen = new Genre(1,'tt');
//echo $role1->equals($role2);
//$u = new User(0,'ilya','ilya',1);
//$user = new UserController('ttt');
//$user->Add($u);
//$res =  $user->Select(function ($e){return $e->id == 0;});
//echo $res[0];
//var_dump(db::getInstance());
//var_dump(\db\db::getInstance());
//$f = new FilmController(db::getInstance());
if(isset($_GET['fio'])){
    $m = new Movies();
    $m->getByAuthor();
}
?>