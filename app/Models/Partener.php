<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class Partener extends BaseModel
{
    use SoftDeletes;

    public function getImageUrlAttribute()
    {
        $image = asset($this->image);
        return $image;
    }
    public function details()
    {
        return $this->hasOne(PartenerDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId());
    }
    public function descriptions($language_id = null)
    {
        if ($language_id) {
            $data = $this->hasMany(PartenerDescription::class)->where('language_id', $language_id)->first();
            if (!$data) {
                $data = $this->hasMany(PartenerDescription::class)->first();
            }
            return $data;
        }
        $data = $this->hasMany(PartenerDescription::class)->where('language_id', LaravelLocalization::getCurrentLocaleId())->first();
        return $data;
    }
    public static function withDescription($partener_id = null)
    {
        $query = self::join('partener_descriptions AS pd', 'pd.partener_id', 'parteners.id')
            ->where('pd.language_id', LaravelLocalization::getCurrentLocaleId())
            ->select(['parteners.created_at', 'pd.*']);


        if ($partener_id) {
            if (is_array($partener_id)) {
                $query->whereIn('parteners.id', $partener_id);
            } else {
                $query->where('parteners.id', $partener_id);
            }
        }
        $query->select([
            'parteners.*',
            'pd.title',
            'pd.description',

        ]);
        return $query;
    }
}
