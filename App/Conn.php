<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 05/03/17
 * Time: 04:30
 */

namespace App;

class Conn
{
    public static function getDb()
    {
        return new \PDO("mysql:host=localhost;dbname=testeMVC;","root","root");
    }
}