<?php

namespace App\Http\Controllers\Web;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function about(){
        $banners = Banner::withDescription([1,2,3])->get();

        return view('web.pages.about',get_defined_vars());
    }
    public function contact()
    {
        return view('web.pages.contact');
    }
}
