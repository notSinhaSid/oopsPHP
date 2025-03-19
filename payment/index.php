<?php

include_once ('abstract/paymenttype.abstract.php');
include_once ('classes/buyproduct.class.php');


echo "This is demo show of abstract and classes";

$buyprod = new BuyProduct();
echo "<br><h2>".$buyprod->getPayment()."</h2>";

?>
