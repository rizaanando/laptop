<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;                
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class SesiController extends Controller
{

    //fungsi login jangan di acak2------------------------------------------------------------------------
    public function index()
    {
        return view('toko.auth.login') ;
    }
    function login(Request $request){
        $request-> validate([
            'email'=>'required',
            'password'=> 'required'
        ],[
            'email.required'=>'please check your email ',
            'password.required'=> 'please check your password ',
        ]);

    $infologin = [
        'email'=>$request->email,
        'password'=> $request->password,
    ];

    if(Auth::attempt($infologin)){
    if(Auth::user()->role =='admin'){
    return redirect('admin');
    
    }elseif (Auth::user()->role =='user'){
    return redirect('admin/user');
    }
    }else{
        return redirect('')->withErrors('Email and password do not match, please log in')->withInput();
    }
}

    public function logout()
    {
        Auth::logout();
        return redirect ('');
    }


//halaman user------------------------------------------------------------------------
public Function userindex ()

{
    return view ('toko.layout.userindex',[
        'title'=> 'userindex',
    ]);
}

public Function shop ()

{
    return view ('toko.shop.shop',[
        'title'=> 'shop',
    ]);
}

public Function halamanshop ()

{
    return view ('toko.shop.halamanshop',[
        'title'=> 'halamanshop',
    ]);
}

public Function fillterbar ()

{
    return view ('toko.shop.relate',[
        'title'=> 'relate',
    ]);
}

public Function bannershop ()

{
    return view ('toko.shop.bannershop',[
        'title'=> 'bannershop',
    ]);
}

public Function detailproducts ()

{
    return view ('toko.shop.detailproducts',[
        'title'=> 'detailproducts',
    ]);
}

public Function kategori ()

{
    return view ('toko.shop.kategori',[
        'title'=> 'kategori',
    ]);
}

public Function bannerchart ()

{
    return view ('toko.chart.bannerchart',[
        'title'=> 'bannerchart',
    ]);
}

public Function chartpesan ()

{
    return view ('toko.chart.chartpesan',[
        'title'=> 'chartpesan',
    ]);
}

//Halaman Admin------------------------------------------------------------------------
public Function dashbooardadmin ()

{
    return view ('toko.adminpage.navsidebar',[
        'title'=> 'navsidebar',
    ]);
}

public Function pendaftaranadmin ()

{
    return view ('toko.adminpage.pendaftaranadmin',[
        'title'=> 'Pendaftaran Admin',
    ]);
}


public Function jadwalcombasedadmin ()

{
    return view ('toko.adminpage.jadwalcombasedadmin',[
        'title'=> 'Jadwal combased admin',
    ]);
}


public Function historynilaiadmin ()

{
    return view ('toko.adminpage.historynilaiadmin',[
        'title'=> 'History nilai Admin',
    ]);
}

public Function pengumumanadmin ()

{
    return view ('toko.adminpage.pengumumanadmin',[
        'title'=> 'Pengumuman Admin',
    ]);
}

public Function pengajuancetaksertifikatadmin ()

{
    return view ('toko.adminpage.pengajuancetaksertifikatadmin',[
        'title'=> 'Pengajuan cetak sertifikat admin',
    ]);
}


public Function pembayaranadmin ()

{
    return view ('toko.adminpage.pembayaranadmin',[
        'title'=> 'Pembayaran Admin',
    ]);
}


public Function myprofileadmin ()

{
    return view ('toko.profile.myprofileadmin',[
        'title'=> 'Myprofile admin',
    ]);
}



//Crud Admin------------------------------------------------------------------------
public Function tambahlistpendaftaran ()

{
    return view ('toko.adminpage.tambahlistpendaftaran',[
        'title'=> 'Tambahlistpendaftaran',
    ]);
}


public Function tambahpembayaran ()

{
    return view ('toko.adminpage.tambahpembayaran',[
        'title'=> 'Tambah Pembayaran',
    ]);
}

public Function tambahcetakserti ()

{
    return view ('toko.adminpage.tambahcetakserti',[
        'title'=> 'Tambah Cetak Sertifikat',
    ]);
}

public Function tambahpengumuman ()

{
    return view ('toko.adminpage.tambahpengumuman',[
        'title'=> 'Tambah Jadwal Pengumuman',
    ]);
}

public Function tambahjadwalcombase ()

{
    return view ('toko.adminpage.tambahjadwalcombase',[
        'title'=> 'Tambah Jadwal Combase',
    ]);
}

public Function tambahhistori ()

{
    return view ('toko.adminpage.tambahhistori',[
        'title'=> 'Tambah histori',
    ]);
}


public Function chart ()

{
    return view ('toko.chart.chart',[
        'title'=> 'chart',
    ]);
}

public Function navuser ()

{
    return view ('toko.layout.index',[
        'title'=> 'navuser',
    ]);
}

public Function admin ()

{
    return view ('toko.layout.admin',[
        'title'=> 'admin',
    ]);
}

public Function usermyaccont ()

{
    return view ('toko.userprofile.usermyaccont',[
        'title'=> 'usermyaccont',
    ]);
}

public Function usersetting ()

{
    return view ('toko.userprofile.usersetting',[
        'title'=> 'usersetting',
    ]);
}
public Function userprofileindex ()

{
    return view ('toko.userprofile.userprofileindex',[
        'title'=> 'userprofileindex',
    ]);
}
public function editprofile()

{
    return view('toko.userprofile.editprofile',[
        'title'=> 'editprofile',
    ]);
}
public function register()

{
    return view('toko.auth.register',[
        'title'=> 'register',
    ]);
}


public function restpasword()

{
    return view('toko.auth.restpasword',[
        'title'=> 'restpasword',
    ]);
}

public function navsidebar()

{
    return view('toko.adminpage.navsidebar',[
        'title'=> 'navsidebar',
    ]);
}

public Function barang ()

{
    return view ('toko.adminpage.barang',[
        'title'=> 'barang',
    ]);
}

public Function thanksindex ()

{
    return view ('toko.chart.thanksindex',[
        'title'=> 'thanksindex',
    ]);
}
}
