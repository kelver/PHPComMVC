<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 05/03/17
 * Time: 05:11
 */

namespace KMV\DI;

use App\Conn;

class Container
{
    public static function getModel($model)
    {
        $class = "\\App\\Models\\".ucfirst($model);
        return new $class(Conn::getDb());
    }
}