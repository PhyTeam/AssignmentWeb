<?php
/**
 * Created by PhpStorm.
 * User: bbphuc
 * Date: 4/18/2017
 * Time: 12:35 PM
 */

    class DBConnection {
        private $conn;

        private static $instance;

        function __construct(){}

        /**
         * Establishing database connection
         * @return mysqli database connection handler
         */
        function connect() : mysqli {
            include_once './config.php';

            // Connecting to mysql database
            $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

            // Check for database connection error
            if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL :". mysqli_connect_error();

            }

            return $this->conn;
        }

        /**
         * Skeleton pattern
         * @return mysqli database connection
         */
        public static function getInstance() {
            if (self::$instance != null){
                return self::$instance->conn;
            } else {
                self::$instance = new DBConnection();
                return self::$instance->connect();
            }
        }
    }