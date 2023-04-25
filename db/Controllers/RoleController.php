<?php

namespace db\Controllers;

use db\Models\Role;

require_once '/Applications/MAMP/htdocs/db/Controllers/Controller.php';
require_once '/Applications/MAMP/htdocs/db/Models/Role.php';

class RoleController extends Controller
{
    function getListModel()
    {
        if(!$this->connection->connect_error){
            $sql_select = 'SELECT * FROM Role';
            $res = $this->connection->query($sql_select);
            foreach ($res as $item){
                $role = new Role($item['id'],$item['title']);
                $this->Add($role);
            }
        }
    }
}

?>