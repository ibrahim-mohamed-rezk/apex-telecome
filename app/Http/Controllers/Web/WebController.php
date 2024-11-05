<?php

namespace App\Http\Controllers\Web;

use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function index()
    {
        $banners = Banner::withDescription([1,2,3])->get();
        $products = Product::withDescription()->cursor();
        return view('web.home.index',get_defined_vars());
    }
}
