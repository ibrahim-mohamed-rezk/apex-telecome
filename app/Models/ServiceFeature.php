<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class ServiceFeature extends Model
{
    use HasFactory;
    public function details()
    {
        return $this->hasOne(ServiceFeatureDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId());
    }

    public function descriptions($language_id= null)
    {
        if ($language_id) {
            $data = $this->hasMany(ServiceFeatureDescription::class)->where('language_id', $language_id)->first();
            if(!$data){
                $data = $this->hasMany(ServiceFeatureDescription::class)->first();
            }
            return $data;
        }
        $data = $this->hasMany(ServiceFeatureDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId())->first();
        return $data;
    }
}
