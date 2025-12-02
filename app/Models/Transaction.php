<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'products_id',
        'user_id',      // 🟩 ditambahkan untuk relasi user
        'username',
        'email',
        'description',
        'donate_price',
    ];

    protected $hidden = [];

    // Relasi ke tabel product
    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    // 🟩 Relasi ke user (penting untuk history donasi per user)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
