<?php
require 'bank.php';

class Account extends Bank{

}

$bank = new Bank(); //instance

// echo 'Balance is: '.$bank->balance();
echo 'deposite amount is '.$bank->deposite();

?>