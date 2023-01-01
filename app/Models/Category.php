<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use App\Models\Product;
use App\Models\PhotoGallery;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [];


    public function blogs()
    {
        return $this->hasOne(Blog::class);
    }

    public function photo_galleries()
    {
        return $this->hasOne(PhotoGallery::class);
    }

    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
