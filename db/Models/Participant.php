<?php

namespace db\Models;

include_once 'IObjects.php';

class Participant implements IObjects
{
    public $id;
    public $fio;
    public $idRole;

    public function __construct($id, $fio, $idRole)
    {
        $this->id = $id;
        $this->fio = $fio;
        $this->idRole = $idRole;
    }

    public function __toString()
    {
        return "ID: " . $this->id . " FIO: " . $this->fio . " idRole" . $this->idRole;
    }

    public function equals($model)
    {
        if (gettype($model) == gettype($this)) {
            if (get_class($model) == get_class($this)) {
                if ($this->fio == $model->fio && $this->idRole == $model->idRole) {
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
}

?>