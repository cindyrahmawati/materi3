<?php 
namespace App\Http\Controllers;
use\App\Models\user;

class UserController extends Controller {
	function index(){
		$data['list_user'] = User::all();
		return view('user.index', $data);
	}

	function create(){
		return view('user.create');
	}
	function store(){
		$user = new User;
		$user->nama = request ('nama');
		$user->harga = request ('harga');
		$user->berat = request ('berat');
		$user->stok = request ('stok');
		$user->deskripsi = request ('deskripsi');
		$user->save();

		return redirect('user')->with('success', 'Data Berhasil Ditambahkan');
	}
	function show(User $user){
		$data['user'] = $user; 
		return view ('user.show', $data);	
		
	}
	function edit(User $user){
		$data['user'] = $user;
		return view ('user.edit', $data);
		
	}
	function update(User $user){ 
		$user->nama = request ('nama');
		$user->harga = request ('harga');
		$user->berat = request ('berat');
		$user->stok = request ('stok');
		$user->deskripsi = request ('deskripsi');
		$user->save();

		return redirect('user')->with('success', 'Data Berhasil Diedit');;
	}

	function destroy(user $user){
		$user->delete();
		return redirect('admin/user')->with('danger', 'Data Berhasil Dihapus');
	}

}