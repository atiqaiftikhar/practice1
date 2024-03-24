<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'heading', 'description', 'facebook','twitter','instagram','youtube','product_img','products','phone_no'];
}
