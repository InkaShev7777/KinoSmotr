<?php

namespace db\Controllers;

use db\Models\Participant;

require_once '/Applications/MAMP/htdocs/db/Controllers/Controller.php';
require_once '/Applications/MAMP/htdocs/db/Models/Participant.php';

class ParticipantController extends Controller
{

    function getListModel()
    {
        if(!$this->connection->connect_error){
            $sql_select = 'SELECT * FROM Participiant';
            $res = $this->connection->query($sql_select);
            foreach ($res as $item){
                $participiant = new Participant($item['id'],$item['Fio'],$item['idRole']);
                $this->Add($participiant);
            }
        }
    }
}

?>