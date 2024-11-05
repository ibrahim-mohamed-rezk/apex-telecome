<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Service extends Model
{
    use SoftDeletes;

    public function getImageUrlAttribute()
    {
        $image = asset($this->image);
        return $image;
    }
    public function getUrlAttribute(){
        $link = route('web.service_details', $this->slug);
        return $link;
    }
    public function details()
    {
        return $this->hasOne(ServiceDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId());
    }
    public function features(){
        return $this->hasMany(ServiceFeature::class);
    }
    public function descriptions($language_id = null)
    {
        if ($language_id) {
            $data = $this->hasMany(ServiceDescription::class)->where('language_id', $language_id)->first();
            if (!$data) {
                $data = $this->hasMany(ServiceDescription::class)->first();
            }
            return $data;
        }
        $data = $this->hasMany(ServiceDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId())->first();
        return $data;
    }
    public static function withDescription($service_id = null)
    {
        $query = self::join('service_descriptions AS sd', 'sd.service_id', 'services.id')
            ->where('sd.language_id', LaravelLocalization::getCurrentLocaleId())
            ->select(['services.created_at', 'sd.*']);


        if ($service_id) {
            if (is_array($service_id)) {
                $query->whereIn('services.id', $service_id);
            } else {
                $query->where('services.id', $service_id);
            }
        }
        $query->select([
            'services.*',
            'sd.title',
            'sd.keywords',
            'sd.description',
            'sd.meta_title',
            'sd.meta_keywords',
            'sd.meta_description',

        ]);
        return $query;
    }
}
