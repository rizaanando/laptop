<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserAccountController extends Controller
{
    public function myAccount()
    {
        return view('toko.userprofile.userprofileindex');
    }

}   
