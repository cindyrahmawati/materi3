<?php

namespace App\Http\Controllers;

class AuthController extends Controller{

	function showLogin(){
		return view('login');
	}

	function showRegistrasi(){
		return view('registrasi');
	}

	function showAdminLogin(){
		return view('admin.login');
	}

	function loginProcess(){
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')->with('success', 'Login Berhasil');
		}else{
			return back()->with('danger', 'Login Gagal Silahkan Cek Kembali Email Dan Password Anda');
		}
	}

	function showAdminRegistrasi(){
		return view('admin.registrasi');
	}
}