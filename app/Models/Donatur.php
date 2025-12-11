<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donatur extends Model
{
    use HasFactory;

    protected $table = 'donaturs'; 

    protected $fillable = [
        'name',
        'email',
        'amount',
        'status',
        'category_id',
        'product_id',
    ];
}
