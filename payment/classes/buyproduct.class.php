<?php


class buyproduct extends Visa
{
    public function getPayment()
    {
        return $this->visaPayment();
    }
}