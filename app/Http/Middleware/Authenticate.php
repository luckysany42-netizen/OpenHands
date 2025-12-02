<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Redirect user ketika belum login.
     */
    protected function redirectTo(Request $request): ?string
{
    // Jika user membuka page selain login
    if (! $request->expectsJson() && !$request->is('login')) {

        session()->flash('error', 'Kamu harus login terlebih dahulu sebelum melakukan donasi.');

        return route('login');
    }

    return null;
}

}
