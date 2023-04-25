<?php

namespace db\Controllers;
use db\Models\Film;

require_once '/Applications/MAMP/htdocs/db/Controllers/Controller.php';
require_once '/Applications/MAMP/htdocs/db/Models/Film.php';

class FilmController extends Controller
{
   public function __construct($connection)
   {
       parent::__construct($connection);
   }

    function getListModel()
    {
        if(!$this->connection->connect_error){
            $sql_select = 'SELECT * FROM Film';
            $res = $this->connection->query($sql_select);
            foreach ($res as $item){
                $film = new Film($item['id'],$item['title'],$item['isPremium'],$item['country'],$item['description'],$item['Img'],$item['imdb'],$item['genreID'],$item['isPopular'],$item['year'],$item['ParticipantID']);
                $this->Add($film);
            }
        }
    }
}

?>