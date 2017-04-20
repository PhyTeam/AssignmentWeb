<?php
/**
 * Created by PhpStorm.
 * User: bbphuc
 * Date: 4/18/2017
 * Time: 12:37 PM
 */

    require_once 'config.php';
    require_once 'lib/AutoLoader.php';
    $loader = new \Lib\Psr4AutoloaderClass();
    $loader->register();

    $loader->addNamespace('\Controllers', './controllers/');
    $loader->addNamespace('\Models', './models/');
    $loader->addNamespace('\Views', './views/');
    $loader->addNamespace('\Lib', './lib/');

    //$ctrl = new \Controllers\MyController();
    //$ctrl->home();

    class App
    {
        protected $controller = 'home';
        protected $method = 'index';
        protected $param = [];

        function __construct()
        {
            print_r( $this->parseUrl());
        }

        public function parseUrl()
        {
            if (isset($_GET['url'])){
                $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
                return 'Blala';
            }
            return 'B;a';
        }
    }

    $app = new App();


    if (isset($_GET['controller']) && isset($_GET['action'])){
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    } else {
        $controller = "pages";
        $action = "home";
    }

    require_once 'views/layout.php';
