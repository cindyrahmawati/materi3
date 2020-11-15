<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{

	function showHome(){
		return view('home');
	}

	function showProduk(){
		return view('produk');
	}

	function showKategori(){
		return view('kategori');
	}

	function showTemplate(){
		return view('template.base');
	}

	function showAdminBeranda(){
		return view('admin.beranda');
	}

	function showAdminKategori(){
		return view('admin.kategori');
	}

	function showAdminProduk(){
		return view('admin.produk');
	}

}