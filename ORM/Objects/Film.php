<?php
include_once 'IObjects.php';
    class Film implements IObjects {
        private $id;
        private $title;
        private $desc;
        private $imdb;
        private $isPremium;
        private $img;
        private $year;
        private $isPop;
        private $genreID;
        private $country;
        private $participantID;

        public function __construct($id,$title,$isPremium,$country,$desc,$img,$imdb,$genreID,$isPop,$year,$participantID){
            $this->id = $id;
            $this->country = $country;
            $this->isPremium = $isPremium;
            $this->desc = $desc;
            $this->genreID = $genreID;
            $this->title = $title;
            $this->isPop = $isPop;
            $this->imdb = $imdb;
            $this->year = $year;
            $this->participantID = $participantID;
            $this->img = $img;
        }

        public function equals($model)
        {

        }
    }
?>