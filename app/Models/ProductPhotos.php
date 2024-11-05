<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPhotos extends BaseModel
{
    use HasFactory;
    public function product(){
        return $this->BelongsTo(Product::class);
    }
}
