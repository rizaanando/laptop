<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserEditAccountController extends Controller
{
    public function editprofile()
    {
        return view('toko.userprofile.editprofile');
    }
}   
