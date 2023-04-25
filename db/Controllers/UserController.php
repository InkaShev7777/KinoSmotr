<?php

namespace db\Controllers;

require_once '/Applications/MAMP/htdocs/db/Controllers/Controller.php';

class UserController extends Controller
{
    public function Registration($user):bool{
        if(strlen($user->getLogin()) > 4 && strlen($user->getLogin()) < 12 && strlen($user->getPass()) > 4 && strlen($user->getPass()) < 12){
            $this->Add($user);
            return true;
        }
        return false;
    }
    public function Authentication($login,$pass):bool{
        foreach ($this->getListModel() as $item){
            if($item->getLogin() == $login && $item->getPass() == $pass){
                return true;
            }
        }
        return false;
    }
    function getListModel()
    {
        return $this->listmodel;
    }
}

?>