<?php
/**
 * Created by PhpStorm.
 * User: awais
 * Date: 2017-09-07
 * Time: 2:53 PM
 */

namespace App\Store;


class User
{
    protected $name;
    protected $address;
    protected $budget;
    protected $expense;

    function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
        $this->budget = 5000;
        $this->expense = 3000;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function showBudget()
    {
        var_dump($this->budget);
        return $this;
    }

    public function showExpense()
    {
        var_dump($this->expense);
        return $this;
    }


    public function buyGrocery($expense)
    {
        $this->budget -= $expense;
        return $this;
    }

    public function buyMilk($expense)
    {
        $this->budget -= $expense;
        return $this;
    }
}