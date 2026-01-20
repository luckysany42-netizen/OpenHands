<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class LearnController extends Controller
{
    public function show($id)
    {
        // 1️⃣ Ambil data campaign
        $campaign = Product::findOrFail($id);

        // 2️⃣ Ambil daftar donasi SUCCESS untuk campaign ini
        $donations = Transaction::where('products_id', $id)
            ->where('status', 'success')
            ->orderBy('created_at', 'desc')
            ->get();

        // 3️⃣ Hitung progress donasi (%)
      $target = (int) $campaign->goal_price;
$current = (int) $campaign->current_price;

$progress = 0;
if ($target > 0) {
    $progress = min(100, round(($current / $target) * 100, 1));
}



        // 4️⃣ Kirim semua data ke view
        return view('pages.learn', compact(
            'campaign',
            'donations',
            'progress'
        ));
    }
}
