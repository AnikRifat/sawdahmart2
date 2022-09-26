<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // protected $table = "products";
    protected $fillable = [
        'product_id',
        'name',
        'details',
        'description',
        'image',
        'image_2',
        'image_3',
        'price',
        'unit',
        'category_id',
        'sub_category_id',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function subcategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'id');
    }
}
