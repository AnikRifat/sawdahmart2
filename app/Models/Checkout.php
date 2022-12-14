<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    // protected $table = 'order';
    use HasFactory;
    protected $fillable = [
        'track_id',
        'user_id',
        'product_id',
        'product_quantity',
        'product_size',
        'product_color',
        'date',
        'time',
        'product_name',
        'product_price'
    ];
    public function product()
    {
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }
    public function color($id)
    {
        $items = Color::where('id', $id)->get();
        return $items->name;
    }
    public function size($id)
    {
        $items = Size::where('id', $id)->get();
        return $items->name;
    }
    // public function product()
    // {
    //     return $this->hasOne(Product::class, 'product_id', 'id');
    // }
}
