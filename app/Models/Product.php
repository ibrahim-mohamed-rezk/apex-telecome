<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Product extends BaseModel
{
    use SoftDeletes;

    public function getImageUrlAttribute()
    {
        $image = asset($this->image);
        return $image;
    }
    public function getUrlAttribute(){
        $link = route('web.product_details', $this->slug);
        return $link;
    }
    public function details()
    {
        return $this->hasOne(ProductDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId());
    }
    public function photos(){
        return $this->hasMany(ProductPhotos::class);
    }
    public function descriptions($language_id = null)
    {
        if ($language_id) {
            $data = $this->hasMany(ProductDescription::class)->where('language_id', $language_id)->first();
            if (!$data) {
                $data = $this->hasMany(ProductDescription::class)->first();
            }
            return $data;
        }
        $data = $this->hasMany(ProductDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId())->first();
        return $data;
    }
    public static function withDescription($product_id = null)
    {
        $query = self::join('product_descriptions AS pd', 'pd.product_id', 'products.id')
            ->where('pd.language_id', LaravelLocalization::getCurrentLocaleId())
            ->select(['products.created_at', 'pd.*']);


        if ($product_id) {
            if (is_array($product_id)) {
                $query->whereIn('products.id', $product_id);
            } else {
                $query->where('products.id', $product_id);
            }
        }
        $query->select([
            'products.*',
            'pd.title',
            'pd.keywords',
            'pd.description',
            'pd.meta_title',
            'pd.meta_keywords',
            'pd.meta_description',

        ]);
        return $query;
    }
}
