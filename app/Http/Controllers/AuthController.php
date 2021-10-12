<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //


    public function login(Request $request)
    {
        $input = $request->all();


        if (User::where('email', '=', $input['email'])->first() == true) {
            if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            
              return redirect('/'); 
            } else {
                return redirect()->back()->with('error', 'Password salah');
            }
        } else {
            return redirect()->back()->with('error', 'Email tidak ada atau belum terdaftar');
        }
    }
}
