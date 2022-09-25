<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table = "subcategory";
    protected $fillable = [
        'name',
        'category_id'
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'sub_category_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
