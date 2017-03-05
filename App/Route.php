<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 21:42
 */

namespace App;

use KMV\Init\Bootstrap;

class Route extends Bootstrap
{
    protected function initRoutes()
    {
        $routes['home'] = array(
            "route"=>"/",
            "controller"=>"indexController",
            "action"=>"index"
        );
        $routes['index'] = array(
            "route"=>"/index",
            "controller"=>"indexController",
            "action"=>"index"
        );
        $routes['contact'] = array(
            "route"=>"/contact",
            "controller"=>"indexController",
            "action"=>"contact"
        );
        $this->setRoutes($routes);
    }
}