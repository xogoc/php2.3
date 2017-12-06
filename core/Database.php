<?php

class Database
{
    private static $mysqli;
    final private function __construct() {}
    private function __clone() {}
    private function __wakeup() {}
    public static function getInstance()
    {
        if (!is_object(self::$mysqli)) self::$mysqli = new mysqli(
            "localhost",
            "user",
            "password",
            "db_7");
        return self::$mysqli;
    }
    private function __destruct()
    {
        if (self::$mysqli) self::$mysqli->close();
    }
}