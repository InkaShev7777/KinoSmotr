<?php

namespace db;
class db
{
    protected static $connection = null;

    public static function getInstance()
    {
        if (is_null(self::$connection)) {
            self::$connection = new \mysqli("localhost", "root", "root", "kinosmotr");
//            self::$connection = new \mysqli()
        }
        return self::$connection;
    }
}

?>