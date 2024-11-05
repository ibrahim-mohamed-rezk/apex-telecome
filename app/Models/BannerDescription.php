<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class BannerDescription extends BaseModel
{
    public $timestamps = false;

    public static function withDescription($banner_id = null){
        $query = self::join('banner_descriptions AS bd', 'bd.banner_id','banners.id')
        ->where('bd.language_id',LaravelLocalization::getCurrentLocaleId())
        ->select(['banners.created_at','bd.*']);


        if($banner_id){
            if(is_array($banner_id)){
                $query->whereIn('banners.id',$banner_id);
            }else{
                $query->where('banners.id',$banner_id);
            }

        }
        $query->select([
            'banners.*',
            'bd.image',

        ]);
        return $query;
    }
}
