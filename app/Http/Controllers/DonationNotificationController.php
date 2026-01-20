<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class DonationNotificationController extends Controller
{
    /**
     * Ambil donasi sukses terbaru untuk notifikasi
     */
    public function latest()
    {
        $donations = Transaction::success()
            ->latest()
            ->limit(5)
            ->get()
            ->map(function ($item) {
                return [
                    'email'  => $item->masked_email,
                    'amount' => number_format($item->donate_price, 0, ',', '.'),
                ];
            });

        return response()->json($donations);
    }
}
