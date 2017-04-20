<?php
/**
 * Created by PhpStorm.
 * User: bbphuc
 * Date: 4/18/2017
 * Time: 1:05 PM
 */
    class PagesController
    {
        public function home() {
            $first_name = "Phuc";
            $last_name = "Bui";

            require_once 'views/pages/home.php';
        }

        public function error(){
            require_once  'views/pages/error.php';
        }
    }