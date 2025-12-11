<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable implements FilamentUser
{
    use Notifiable, HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'photo',
        'is_admin',
    ];

    protected $hidden = [
        'password',
    ];

    // 🔥 Hanya user dengan is_admin = 1 yang boleh masuk ke panel admin
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin === 1;
    }
}
