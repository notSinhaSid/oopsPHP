<?php


abstract class Visa
{
    public function visaPayment()
    {
        return "Performing a Payment using VISA";
    }

    abstract public function getPayment();
}