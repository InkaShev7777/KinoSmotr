<?php
require_once '/Applications/MAMP/htdocs/db/Controllers/FilmController.php';
require_once '/Applications/MAMP/htdocs/db/Controllers/FilmController.php';
require_once '/Applications/MAMP/htdocs/db/Controllers/RoleController.php';
require_once '/Applications/MAMP/htdocs/db/Controllers/ParticipantController.php';
require_once '/Applications/MAMP/htdocs/db/db.php';

use db\Controllers\FilmController;
use db\Controllers\ParticipantController;
use db\Controllers\RoleController;
use db\db;

if(isset($_GET['author'])){
    getByAuthor();
}
function getByAuthor(){
    $film =  new FilmController(db::getInstance());
    $role = new RoleController(db::getInstance());
    $listRole = $role->Select(function ($x){return $x->title == "Author";});
    $idRole = $listRole[0]->id;
    $par = new ParticipantController(db::getInstance());
    $listPar = $par->Select(function ($x) use ($idRole) {return $x->idRole == $idRole;});
    foreach ($listPar as $item){
        if($item->fio == $_GET['author']){
            $masFilms = $film->Select(function ($x) use ($item) {return $x->participantID == $item->id;});
            if( count($masFilms) > 0 ){
                $json = json_encode($masFilms);
                echo $json;
            }
            else{
                echo "400";
            }

        }
        else{
            echo "400";
        }
    }
}
?>