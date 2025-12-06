<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Product;
use App\Services\MidtransService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function pay(Request $request, MidtransService $midtrans)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'amount' => 'required|numeric|min:1000',
            'category_id' => 'required',
            'products_id' => 'required',
        ]);

        $product = Product::findOrFail($request->products_id);

        // Create transaction in DB (status pending)
        $transaction = Transaction::create([
            'products_id'   => $request->products_id,
            'user_id'       => auth()->id(),
            'username'      => $request->name,
            'email'         => $request->email,
            'donate_price'  => $request->amount,
            'description'   => $product->name, // pakai nama campaign
            'status'        => 'pending',
        ]);

        // Midtrans payload
        $params = [
            'transaction_details' => [
                'order_id' => 'TX-' . $transaction->id,
                'gross_amount' => $transaction->donate_price,
            ],
            'customer_details' => [
                'first_name' => $transaction->username,
                'email' => $transaction->email,
            ],
        ];

        $snap = $midtrans->createTransaction($params);

        return response()->json([
            'snapToken' => $snap->token
        ]);
    }

    // MIDTRANS CALLBACK
    public function callback(Request $request)
    {
        $notif = json_decode($request->getContent());

        $orderId = $notif->order_id;
        $status = $notif->transaction_status;

        $id = str_replace("TX-", "", $orderId);

        $transaction = Transaction::find($id);

        if (!$transaction) return;

        if ($status === 'settlement') {
            $transaction->status = 'success';

            // update campaign total donasi
            $product = Product::find($transaction->products_id);
            if ($product) {
                if ($product->current_price !== null) {
                    $product->current_price += $transaction->donate_price;
                } else {
                    $product->current_price = $transaction->donate_price;
                }
                $product->save();
            }

        } elseif ($status === 'pending') {
            $transaction->status = 'pending';

        } else {
            $transaction->status = 'failed';
        }

        $transaction->save();
    }
}
