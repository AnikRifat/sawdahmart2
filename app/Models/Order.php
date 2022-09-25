<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice',
        'track_id',
        'user_id',
        'subtotal',
        'status',
        'date',
        'time',

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function product_id($id)
    {
        $items = Checkout::where('track_id', $id)->get();


        return $items;
    }
    // public function product($id)
    // {
    //     $item = Product::where('id', $id)->get();
    //     return $item;
    // }
}
