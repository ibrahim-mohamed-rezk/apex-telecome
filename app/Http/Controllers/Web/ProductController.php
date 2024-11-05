<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        if($request->search){
            $products = Product::withDescription()->where('pd.title',$request->search)->paginate(10);
        }else{
            $products = Product::withDescription()->paginate(10);
        }
        return view('web.products.index',get_defined_vars());
    }
    public function show($slug){
        $product = Product::withDescription()->where('products.slug',$slug)->first();
        $realted_products = Product::withDescription()->where('products.slug','!=',$slug)->take(5)->cursor();
        return view('web.products.product_details',get_defined_vars());
    }
}
