<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Language extends Model
{
    // so data is not deleted permintaly
    use SoftDeletes;

    // No Timestamp
    public $timestamps = false;


    public function getUrlAttribute(): string
    {
        return action('Admin\LanguageController@details', [$this->id, $this->name]);
    }
}
