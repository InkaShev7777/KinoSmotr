<?php

namespace db\Controllers;
use db\Models\Film;

abstract class Controller
{
    protected $connection;
    protected $listmodel;

    public function __construct($connection)
    {
        $this->connection = $connection;
        $this->listmodel = array();
        $this->getListModel();
    }

    abstract function getListModel();
    public function Add($model)
    {
        array_push($this->listmodel, $model);
    }

    public function DeleteByID($id)
    {
        $this->listmodel = array_splice($this->listmodel, $id, 1);
    }

    public function DeleteByModel($model)
    {
        $this->DeleteByID($model->id);
    }

    public function UpdateByID($id, $newmodel)
    {
        $this->listmodel[$id] = $newmodel;
    }

    public function UpdateByModel($olduser, $newmodel)
    {
        $this->listmodel[$olduser->id] == $newmodel;
    }

    public function SelectionById($id)
    {
        return $this->listmodel[$id];
    }

    public function Select($func)
    {
        return array_filter($this->listmodel, $func);
    }

}

?>