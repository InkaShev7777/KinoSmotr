<?php
include_once 'ORM/Objects/Role.php';
include_once 'ORM/Objects/Genre.php';
$role1 = new Role(1,'test');
$role2 = new Role(1,'test');
$gen = new Genre(1,'tt');
echo $role1->equals($role2);
?>