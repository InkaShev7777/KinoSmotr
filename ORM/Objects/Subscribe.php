<?php
    class Subscribe{
        private $id;
        private $title;
        private $isPremium;

        private function __construct($id,$title,$isPremium){
            $this->id = $id;
            $this->title = $title;
            $this->isPremium = $isPremium;
        }
    }
?>