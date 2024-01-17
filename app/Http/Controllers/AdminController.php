<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function index ()
    {
        return view('toko.adminpage.navsidebar');
    }


    function user ()
    {
        return view('toko.layout.userindex');
}
    function admin ()
    {
        return view('toko.adminpage.navsidebar');
    }
};

//function user ()
//{
 //   echo "hallo user";
  //  echo "<h1>", Auth::user()->name,"</h>";
  //  echo "<h1>", Auth::user()->npm,"</h>";
 //   echo "<a href='/logout'>Logout >></a>";
//}
