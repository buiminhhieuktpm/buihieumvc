<?php

namespace Mvc\Config;

use PDO;

class Database
{
    private static $bdd = null;

    private function __construct() {
    }

    public static function getBdd() {
        if(is_null(self::$bdd)) {
            self::$bdd = new PDO("mysql:host=127.0.0.1;dbname=mvc", 'root', 'buihieu99');
        }
        return self::$bdd;
    }
}
