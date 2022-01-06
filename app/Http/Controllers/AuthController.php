<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) {
            return redirect()->route('laporans.index');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $rules = [
            'username'          => 'required',
            'password'          => 'required'
        ];

        $messages = [
            'username.required'         => 'Username wajib diisi',
            'password.required'         => 'Password wajib diisi',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->with($validator)->withInput($request->all());
        }

        $data = [
            'username'  => $request->input('username'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('laporans.index');
        } else { // false

            //Login Fail
            Session::flash('error', 'Email atau password salah!');
            return redirect()->route('login');
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        Session::flash('success', 'Berhasil logout!');
        return redirect()->route('home');
    }
}
