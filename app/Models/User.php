<?php

namespace App\Models;

use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable implements FilamentUser, HasAvatar
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

    /**
     * 🔐 Hanya user dengan is_admin = 1 yang boleh masuk panel admin
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return $this->is_admin === 1;
    }

    /**
     * 🖼️ Avatar admin Filament
     * Ambil dari foto profil user (sinkron user ↔ admin)
     */
    public function getFilamentAvatarUrl(): ?string
    {
        return $this->photo
            ? asset('profile_photos/' . $this->photo)
            : null;
    }
}
