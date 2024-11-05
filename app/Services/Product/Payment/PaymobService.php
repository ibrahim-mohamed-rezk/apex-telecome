<?php
namespace App\Services\Product\Payment;
use Illuminate\Http\Client\Request ;
use Illuminate\Support\Facades\Http;

class PaymobService {
    private $api_key = '';
    private $token ;
    private $id ;
    private $integration_id ;
    private $total;
    private $total_cents;
    private $iframe_token;
    private $order;
    private $user;
    public function __construct($order,$user,$iframe_token,$integration_id)
    {
        $this->total = $order->total;
        $this->total_cents = $this->total * 100;
        $this->iframe_token = $iframe_token;
        $this->integration_id = $integration_id;
        $this->order = $order;
        $this->user = $user;
    }

    public function getToken()
    {
        $url="https://accept.paymobsolutions.com/api/auth/tokens";
        $response = Http::withHeaders(['content-type' => 'application/json'])->post($url,["api_key" => $this->api_key]);

        if(isset($response->json()['token']))
        {
            $this->token= $response->json()['token'];
            return $response->json()['token'];

        }
        return false;
    }

    public function getId()
    {
        $this->token = $this->getToken();
        $response = Http::withHeaders(['content-type' => 'application/json'])
            ->post('https://accept.paymobsolutions.com/api/ecommerce/orders',
                ["auth_token" => $this->token,
                    "delivery_needed" => "false",
                    "amount_cents" => (int)$this->total_cents,
                    "items" => [
                    ]]);

        if(isset($response->json()['id']))
        {
            $this->id = $response->json()['id'];
            return $this->id;
        }
        return null;
    }
    public function generateTokenPay()
    {
        $url = "https://accept.paymob.com/api/acceptance/payment_keys";
        // dd($url);
        $response = Http::withHeaders(['content-type' => 'application/json'])->post($url,
            [
                "auth_token" => $this->token,
                "expiration" => 36000,
                "amount_cents" =>(int)$this->total_cents,
                "order_id" => $this->id,
                "billing_data" =>
                [
                    "apartment" => "NA",
                    "email" => $this->user->email,
                    "floor" => "NA",
                    "first_name" => $this->user->name,
                    "street" => "NA",
                    "building" => "NA",
                    "phone_number" => $this->user->phone,
                    "shipping_method" => "NA",
                    "postal_code" => "NA",
                    "city" => "NA",
                    "country" => "NA",
                    "last_name" =>$this->user->name,
                    "state" => "NA"
                ],
                "currency" => "EGP",
                "integration_id" =>$this->integration_id
            ]);

        if(isset($response->json()['token']))
        {
            $this->iframe_token = $response->json()['token'];
            return $this->iframe_token;
        }
        return null;

    }

}
