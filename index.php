<?php

require "./classes/User.php";
require "./classes/Premium.php";


$newUser = new User("shikanto", "shikanto1992=", "shikanto@gmail.it");

echo 'Username: ' . $newUser -> getUsername() . '<br>';
echo 'Password: ' . $newUser -> getPassword() . '<br>';
echo  'Email: ' . $newUser -> getEmail();

/****************  CHECKIGN FUNCTIONS PREMIUM CLASS *****************/

$userPremium = new Premium("arcibald", "arcibald!", "arcibald@libero.it");

$userPremium -> setLevel("gold");

$userPremium -> setSconto($userPremium -> getLevel());

echo  'Sconto: ' . $userPremium -> getSconto() . '%' . '<br>';

echo 'Email: ' . $userPremium -> getEmail() . '<br>';

echo 'Livello Premium: ' . $userPremium -> getLevel() . '<br>';



/****************  CHECKIGN FUNCTIONS CREDIT CARD *****************/

$newCard = new Creditcard("1421 1422 2589 2575", "08/12/2021");
echo $newCard -> getNumberCard() . '<br>';
echo $newCard -> getExpireDate();

$newCard -> addCreditCard($newCard -> getInfoCreditCard());

//var_dump($newCard -> getPaymentMethod());

//$newCard2 = new Creditcard("1212 1422 2589 2575", "03/12/2021"); //err cc expired

$newCard2 = new Creditcard("5555 1422 2589 2575", "28/10/2022");

echo $newCard2 -> getNumberCard() . '<br>';
echo $newCard2 -> getExpireDate();

$newCard -> addCreditCard($newCard2 -> getInfoCreditCard());

var_dump($newCard -> getPaymentMethod());


?>