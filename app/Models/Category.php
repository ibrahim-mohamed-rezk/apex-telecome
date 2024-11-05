<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Category extends BaseModel
{
    use SoftDeletes;

    public function getImageUrlAttribute()
    {
        $image = asset($this->image);
        return $image;
    }
    public function details()
    {
        return $this->hasOne(CategoryDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId());
    }
    public function models()
    {
        return $this->hasMany(Category::class, 'category_id');
    }
    public function descriptions($language_id = null)
    {
        if ($language_id) {
            $data = $this->hasMany(CategoryDescription::class)->where('language_id', $language_id)->first();
            if (!$data) {
                $data = $this->hasMany(CategoryDescription::class)->first();
            }
            return $data;
        }
        $data = $this->hasMany(CategoryDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId())->first();
        return $data;
    }
    public static function withDescription($category_id = null)
    {
        $query = self::join('category_descriptions AS cd', 'cd.category_id', 'categories.id')
            ->where('cd.language_id', LaravelLocalization::getCurrentLocaleId())
            ->select(['categories.created_at', 'cd.*']);


        if ($category_id) {
            if (is_array($category_id)) {
                $query->whereIn('categories.id', $category_id);
            } else {
                $query->where('categories.id', $category_id);
            }
        }
        $query->select([
            'categories.*',
            'cd.title',

        ]);
        return $query;
    }
}
