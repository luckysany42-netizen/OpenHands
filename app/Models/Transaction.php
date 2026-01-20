<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'products_id',
        'user_id',     
        'username',
        'email',
        'description',
        'donate_price',
        'status',
    ];

    protected $hidden = [];

    /* =========================
     | RELATIONSHIPS
     ========================= */

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /* =========================
     | SCOPES
     ========================= */

    /**
     * Ambil hanya transaksi donasi yang sukses
     */
    public function scopeSuccess($query)
    {
        return $query->where('status', 'success');
    }

    /* =========================
     | ACCESSORS
     ========================= */

    /**
     * Email donatur yang sudah disensor
     * Contoh: adminsigma@gmail.com -> adm***********
     */
    public function getMaskedEmailAttribute()
    {
        if (!$this->email) {
            return 'anon***';
        }

        $username = explode('@', $this->email)[0];
        $prefix = substr($username, 0, 3);

        return strtolower($prefix) . str_repeat('*', max(strlen($username) - 3, 3));
    }
}
