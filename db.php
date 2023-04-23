<?php
class db{
        protected static $connection = null;
        public static function getInstance(){
          if(is_null(self::$connection)){
              self::$connection = new mysqli("localhost","root","root","kinosmotr");
          }
          return self::$connection;
        }
    }
?>