<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductEventGallery;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [];


    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }


    public function product_event_galleries(){
        return $this->hasMany(ProductEventGallery::class, 'reference_id', 'id');
       }
}
