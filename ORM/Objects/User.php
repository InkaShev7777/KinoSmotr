<?php
    class User{
        private $id;
        private $login;
        private $password;
        private $idSub;

        private function __construct($id,$login,$password,$idSub){
            $this->id = $id;
            $this->login = $login;
            $this->password = $password;
            $this->idSub = $idSub;
        }
    }
?>