<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EASController extends Controller
{
	public function indexEAS()
    {
    // mengambil data dari table counter dan mengurutkannya secara ascending berdasarkan ID
    $counter = DB::table('counter')->orderBy('ID', 'asc')->get();

     // increment the counter_views session
     session()->increment('counter_views');

    // mengirim data counter ke view index
    return view('indexEAS', ['counter' => $counter]);
    }


    public function tambahEAS()
	{
		// memanggil view tambah
		return view('tambahEAS');

	}

    public function store(Request $request)
    {
        $Jumlah = $request->Jumlah;

    // Insert data ke dalam tabel counter
    DB::table('counter')->insert([
        'Jumlah' => $request->Jumlah,
    ]);

    // Alihkan halaman ke halaman counter
    return redirect('/counter');
    }

    // method untuk edit data pegawai
	public function editEAS($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$counter = DB::table('counter')->where('ID',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editEAS',['counter' => $counter]);

	}

	// update data pegawai
	public function update(Request $request)
	{
		// update data pegawai
		DB::table('counter')->where('ID',$request->ID)->update([
			'Jumlah' => $request->Jumlah,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/counter');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('counter')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/counter');
	}

    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$counter = DB::table('counter')
		->where('ID','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('indexEAS',['counter' => $counter, 'cari' => $cari]);

	}

    public function viewsEAS($id)
{
    // mengambil data pegawai berdasarkan id yang dipilih
    $counter = DB::table('counter')->where('ID',$id)->get();


    // passing data pegawai yang didapat ke view view.blade.php
    return view('viewsEAS',['counter' => $counter]);
}


}
