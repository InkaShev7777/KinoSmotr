<?php
    class Participant{
        private $id;
        private $fio;
        private $idRole;

        public function __construct($id,$fio,$idRole){
            $this->id = $id;
            $this->fio = $fio;
            $this->idRole = $idRole;
        }
    }
?>