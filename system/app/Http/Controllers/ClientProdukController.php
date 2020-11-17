<?php 


namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\ClientProduk;
use App\Models\Kategori;


/**
 * 
 */
class ClientProdukController extends Controller
{
	
	function showIndex(){
		$data['list_produk'] = Produk::all();
		return view('home', $data);
	}

	function showProduk(){
		$data['list_produk'] = Produk::all();
		return view('produk', $data);
	}

	function showDetail(){
		$data['list_produk'] = Produk::all();
		return view('detail', $data);
	}

	function showKategori(){
		$data['list_kategori'] = Kategori::all();
		return view('kategori', $data);
	}

	
}