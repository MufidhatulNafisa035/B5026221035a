<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KPController extends Controller
{
	public function indexP15()
	{
    	// mengambil data dari table keranjang belanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data pegawai ke view index
		return view('indexP15',['keranjangbelanja' => $keranjangbelanja]);

	}

    public function beli()
	{
		// memanggil view tambah
		return view('beli');

	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KP_KodeBarang' => $request-> kodebarang ,
			'KP_Jumlah' => $request-> jumlah ,
			'KP_Harga' => $request-> harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}


	// method untuk hapus data pegawai
	public function batal($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('KP_ID',$id)->delete();
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}


}
