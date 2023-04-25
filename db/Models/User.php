<?php

namespace db\Models;

include_once 'IObjects.php';

class User implements IObjects
{
    public $id;
    private $login;
    private $password;
    private $idSub;

    public function __construct($id, $login, $password, $idSub)
    {
        $this->id = $id;
        $this->login = $login;
        $this->password = $password;
        $this->idSub = $idSub;
    }

    public function __toString()
    {
        return "ID: " . $this->id . " Login: " . $this->login . " Password: " . $this->password . " idSub: " . $this->idSub;
    }

    public function equals($model)
    {
        if (gettype($model) == gettype($this)) {
            if (get_class($model) == get_class($this)) {
                if ($this->login == $model->login && $this->idSub == $model->idSub && $this->password == $model->password) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public function getLogin(){
        return $this->login;
    }
    public function getPass(){
        return $this->password;
    }
}

?>