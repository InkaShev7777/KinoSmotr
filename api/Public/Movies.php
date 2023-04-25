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
    $role = new RoleController(db::getInstance());
    $listRole = $role->Select(function ($x){return $x->title == "Author";});
    $idRole = $listRole[0]->id;
    $par = new ParticipantController(db::getInstance());
    $listPar = $par->Select(function ($x) use ($idRole) {return $x->idRole == $idRole;});
    if(count(getByAuthor($listPar[0])) > 0){
        echo json_encode(getByAuthor($listPar[0]));
    }
    else{
        echo "400";
    }
}
function getByAuthor($author):array{
        $film =  new FilmController(db::getInstance());
        if($author->fio == $_GET['author']){
            $masFilms = $film->Select(function ($x) use ($author) {return $x->participantID == $author->id;});
            if( count($masFilms) > 0 ){

                return $masFilms;
            }
            else{
                return [];
            }

        }
        else{
            return [];
        }
}
?>