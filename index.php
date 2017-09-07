<?php

require "vendor/autoload.php";

use App\Awais\User;
use App\Store\User as StoreUser;

$user1 = new User('awais', '30');
$user2 = new User('rehan', '28');
$user3 = new User('anwar', '25');

//var_dump($user1->get_data(), $user2->get_data(), $user3->get_data());

$storeUser1 = new StoreUser('Ramy', 'Egypt');
$storeUser2 = new StoreUser('Osama', 'PK');
$storeUser3 = new StoreUser('Raza', 'In');

//var_dump($storeUser1->getName(), $storeUser2->getName(), $storeUser3->getName());

//$storeUser1->showBudget()->showExpense();
$storeUser1->showBudget()->buyGrocery(20)->buyMilk(30)->showBudget();