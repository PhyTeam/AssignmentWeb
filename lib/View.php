<?php
/**
 * Created by PhpStorm.
 * User: bbphuc
 * Date: 4/19/2017
 * Time: 11:03 PM
 */

namespace Lib;


class View
{
    private $name;
    private $attributes;

    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Get an attribute for a given key
     * @return mixed
     */
    public function getAttribute($key)
    {
        return $this->attributes[$key];
    }


    /**
     * Set some attribute or add new attribute for this view
     * @param mixed $attribute
     */
    public function setAttribute($key, $value)
    {
        $this->attributes[$key] = $value;
    }

    public function render()
    {
        extract($this->attributes);
        require('./views/'.$this->name.'.php');
    }
}