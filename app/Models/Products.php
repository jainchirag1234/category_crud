<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Products;
class Products extends Model
{
    protected $fillable=['category_id','name','price'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
