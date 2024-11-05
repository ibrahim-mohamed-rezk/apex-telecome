<?php

namespace App\Http\Controllers\Web;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index(Request $request)
    {
        if($request->search){
            $services = Service::withDescription()->where('sd.title',$request->search)->cursor();
        }else{
            $services = Service::withDescription()->cursor();
        }
        return view('web.services.index',get_defined_vars());
    }
    public function show($slug){
        $service = Service::withDescription()->where('services.slug',$slug)->first();
        $related_services = Service::withDescription()->where('services.slug','!=',$slug)->cursor();
        return view('web.services.service_details',get_defined_vars());
    }
}
