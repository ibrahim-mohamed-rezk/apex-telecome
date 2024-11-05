<?php
namespace App\Services\Product\Payment;

class PaymentMethod {
    private $payment_method;
    public function __construct($payment_method)
    {
        $this->payment_method = $payment_method;
    }
    public function getId()
    {
        if ($this->payment_method == "visa")
        {
            $id = 4424058;
        }
        else
        {
            $id = null;
        }
        return $id;
    }

    public function getIframe()
    {
        if ($this->payment_method == "visa")
        {
            $id = 801128;
        }
        else
        {
            $id = null;
        }

        return $id;
    }

}
