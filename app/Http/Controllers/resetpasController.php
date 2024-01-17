<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class resetpasController extends Controller
{
    public function index()
    {
        return view('toko.auth.restpasword');
    }

    public function sendemail(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $status = Password::sendemail(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
                    ? view('toko.auth.login') // Ganti dengan nama view untuk konfirmasi pengiriman link reset
                    : view('reset_link_failed'); // Ganti dengan nama view untuk notifikasi pengiriman link gagal
    }
}

