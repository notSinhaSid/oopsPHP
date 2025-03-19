<?php

interface PaymentInterface
{
    public function paymentMethod();
}

class PayPal implements PaymentInterface
{
    public function paymentMethod()
    {
        echo "Your are using Paypal for your transaction<br>";
    }
}

class Visa implements PaymentInterface
{
    public function paymentMethod()
    {
        echo "Your are checking out using a visa <br>";
    }
}

class Cash implements PaymentInterface
{
    public function paymentMethod()
    {
        echo "Your are using not so secure payment method <br.";
    }
}


class BuyProduct
{
    public function pay(PaymentInterface $paymentType)
    {
        $paymentType->paymentMethod();
    }
}





?>