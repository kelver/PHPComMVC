<?php
/**
 * Created by PhpStorm.
 * User: kelver
 * Date: 04/03/17
 * Time: 22:05
 */

namespace App\Controllers;

use KMV\Controller\Action;
use KMV\DI\Container;

class IndexController extends Action
{

    public function index()
    {
        $client = Container::getModel("Client");
        $this->view->clients = $client->fetchAll();
        $this->render("index");
    }

    public function contact()
    {
        $client = Container::getModel("Client");
        $this->view->clients = $client->find(2);
        $this->render("contact");
    }
}