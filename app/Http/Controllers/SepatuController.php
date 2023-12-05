<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepatuController extends Controller
{
	public function index035()
    {
    // mengambil data dari table sepatu dan mengurutkannya secara ascending berdasarkan kodesepatu
    $sepatu = DB::table('sepatu')->orderBy('kodesepatu', 'asc')->get();

    // mengirim data sepatu ke view index
    return view('index035', ['sepatu' => $sepatu]);
    }


    public function stock()
	{
		// memanggil view tambah
		return view('stock');

	}

    public function store(Request $request)
    {
        $merkSepatu = $request->merksepatu;
        $stockSepatu = $request->stocksepatu;
        $tersedia = $stockSepatu >= 1 ? true : false;
    // Insert data ke dalam tabel sepatu
    DB::table('sepatu')->insert([
        'MerkSepatu' => $request->merksepatu,
        'StockSepatu' => $request->stocksepatu,
        'Tersedia' => $tersedia,
    ]);

    // Alihkan halaman ke halaman sepatu
    return redirect('/sepatu');
    }

    // method untuk edit data pegawai
	public function edit035($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$sepatu = DB::table('sepatu')->where('kodesepatu',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('edit035',['sepatu' => $sepatu]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('sepatu')->where('kodesepatu',$request->id)->update([
			'merksepatu' => $request->merksepatu,
			'stocksepatu' => $request->stocksepatu,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepatu');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sepatu')->where('kodesepatu',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sepatu');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepatu = DB::table('sepatu')
		->where('merksepatu','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index035',['sepatu' => $sepatu, 'cari' => $cari]);

	}


}
