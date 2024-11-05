<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Module;
use App\Models\UserModule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class ModuleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Route::currentRouteName() == null){
            return $next($request);
        }

        $action=explode('.',Route::currentRouteName())[0];
        $module = Module::where('path',$action)->first();
        $user_module = UserModule::where('module_id',$module->id)->where('user_id',Auth::user()->id)->first();

        if (  $user_module ) {
            return $next($request);
        }

        return redirect(getCurrentLocale().'/admin');
    }
}
