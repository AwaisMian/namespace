<?php

namespace App\Awais;

class User
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function get_data()
    {
        return $this->name . $this->age;
    }


}