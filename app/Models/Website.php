<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'logo', 'email', 'address', 'phone', 'slider', 'slider_text', 'tvc1', 'tvc2'];
}
