<?php
/**
 * Created by PhpStorm.
 * User: bbphuc
 * Date: 4/20/2017
 * Time: 2:50 PM
 */

namespace models;


/**
 * Class User
 * @package models
 */
class User
{
    private $username;
    private $email;
    private $password;
    private $first_name;
    private $last_name;

    function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param mixed $first_name
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param mixed $last_name
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    /**
     * Check user already exist in database
     * @param $username
     * @return bool
     */
    public static function check_user_exist($username){
        $conn = \DBConnection::getInstance();
        // TODO: Check user exist
        return true;
    }

    public static function register_user()
    {

    }
}