<?php
/**
 * Created by PhpStorm.
 * User: bbphuc
 * Date: 4/19/2017
 * Time: 10:55 PM
 */

namespace Controllers;


use Lib\View;

class MyController
{
    public function __construct()
    {
    }

    public function home()
    {
        $username = "Pjic";
        $view = new View("home");
        $view->setAttribute("username", $username);
        $view->render();
    }
}