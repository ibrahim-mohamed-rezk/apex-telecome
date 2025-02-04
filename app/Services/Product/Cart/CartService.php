<?php
namespace App\Services\Product\Cart;

use App\Models\Cart;
use App\Models\Product;
use App\Services\Product\ProductService;
use App\Services\Response\ResponseService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class CartService
{

    public function carts($message = ''):array
    {
        $user = Auth::user();
        $carts = Cart::withattr()->where('user_id',$user->id)->orderBy('id','DESC')->get();
        $total_cart = $this->totalCart();
        $status = 200;
        $content =
        [
            'msg' => $message,
            'status' => $status,
            'data' => [
                'carts'=>$carts,
                'total_cart'=>$total_cart
            ],
        ];

        return $content;
    }
    public function totalCart()
    {
        $user = Auth::user();
        $carts = Cart::withattr()->where('user_id',$user->id)->orderBy('id','DESC')->get();
        $total_cart = 0;
        foreach ($carts as $row)
        {
            $total_cart += ($row->product->price['price'] * $row->count);
        }
        return $total_cart;
    }
    public function createCart($requestContent)
    {
        $user = Auth::user();
        $requestContent['user_id'] = $user->id;
        $product = Product::find($requestContent['product_id']);
        $checkCount = (new ProductService($product))->productCount();

        if($checkCount['status'] != 200)
        {
            return ResponseService::response($checkCount);
        }

        $cart = Cart::where('product_id',$requestContent['product_id'])->where('user_id',$user->id)->first();
        if(!$cart)
        {
            $checkAvailable = (new ProductService($product))->checkAvailable($requestContent['count']);
            if($checkAvailable['status'] != 200)
            {
                return ResponseService::response($checkAvailable);
            }
            Cart::create($requestContent);
        }
        else
        {
            $count = $cart->count + $requestContent['count'];
            $checkAvailable = (new ProductService($product))->checkAvailable($count);
            if($checkAvailable['status'] != 200)
            {
                return ResponseService::response($checkAvailable);
            }
            $cart->update(['count'=>$count]);
        }
        $message = __('web.success');
        $response = $this->carts($message);
        return ResponseService::response($response);
    }


    public function editCart($requestContent,$cart_id)
    {
        $user = Auth::user();
        $cart = Cart::where('user_id',$user->id)->where('id',$cart_id)->first();
        if(!$cart)
        {
            $content =
                [
                    'msg' => [__('web.not_found')],
                    'data' => '',
                    'status' => 404,
                ];
            return ResponseService::response($content);
        }

        $product = Product::find($cart->product_id);
        $checkCount = (new ProductService($product))->productCount($requestContent['count']);
        if($checkCount['status'] != 200)
        {
            return ResponseService::response($checkCount);
        }

        $count =  $requestContent['count'];

        $checkAvailable =  (new ProductService($product))->checkAvailable($count);

        if($checkAvailable['status'] != 200)
        {
            return ResponseService::response($checkAvailable);
        }
        $cart->update(['count'=>$requestContent['count']]);

        $message = __('web.success');
        $response = $this->carts($message);
        return ResponseService::response($response);
    }

    public function deleteCart($id)
    {
        $user = Auth::user();
        $cart = Cart::where('user_id',$user->id)->where('id',$id)->first();
        if(!$cart)
        {
            $content =
            [
                'msg' => [__('web.not_found')],
                'data' => '',
                'status' => 400,
            ];
            return ResponseService::response($content);
        }
        $cart->delete();
        $message = __('web.success');
        $response = $this->carts($message);
        return ResponseService::response($response);
    }
}
