<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function register()
    {
        $isim= "Simge";

        return view('member.register' , [
            'isim' => $isim ,

             ]);
    }
    public function lostPassword()
    {
        return view('member.lostpwd');
    }
    public function loginForm()
    {
        return view('member.login');

    }
    public function login(Request $request){
        echo "Mail:" . $request->post('mail');

        echo "<br/>";

        echo "Password:" . $request->post('password');
    }
}
