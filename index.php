<?php

require "./classes/User.php";
require "./classes/Premium.php";
require __DIR__  . "/classes/Products.php";


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


/****************  CHECKIGN FUNCTIONS PRODUCTS *****************/


$newProduct = new Products();
$newProduct -> setImgProduct("rufy.jpg");
$newProduct -> setNameProduct("RufyKing");
$newProduct -> setPriceProduct("12");
$newProduct -> setDescriptionProduct("Lorem ipsum dolor sit amet consectetur 
adipisicing elit. Veniam dignissimos vel suscipit sequi sint nisi. Dicta nobis 
corrupti quia iste consequuntur obcaecati, officia quos necessitatibus sed eveniet. 
Excepturi, rerum itaque.");
echo $newProduct -> getNameProduct() . "<br>";
echo $newProduct -> getPriceProduct() . "<br>";
echo $newProduct -> getDescriptionProduct() . "<br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing</title>
</head>
<body>
    <img style="width: 150px; height:150px;" src="<?php echo $newProduct -> getImgProduct(); ?>" alt="">
</body>
</html>