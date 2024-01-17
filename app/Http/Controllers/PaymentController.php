<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'name' => 'required',
            'username' => 'required',
            'address' => 'required',
            'payment_method' => 'required',
            'amount' => 'required|numeric|min:0',
        ]);

        $payment = Payment::create($validatedData);

        return response()->json(['message' => 'Payment created', 'payment' => $payment], 201);
    }

    // Anda dapat menambahkan fungsi lainnya untuk mengelola pembayaran sesuai kebutuhan aplikasi Anda.
}