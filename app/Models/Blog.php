<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
