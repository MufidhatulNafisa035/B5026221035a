@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>View Pegawai</h3>

	<br/>
	<br/>

	@foreach($pegawai as $p)

	<form action="/pegawai/update" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="container">
                <div class="row justify-content-center">
                    <div class="card-group">
                        <div class="card" style="width:400px">

                        </div>


                            <div class="card-body">

                                <div class="form-group row align-items-center">
                                    <label for="nama" class="col-form-label col-sm-4 text-right">Nama :</label>
                                    <div class="col-sm-8">
                                        {{ $p->pegawai_nama }}
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="jabatan" class="col-form-label col-sm-4 text-right">Jabatan :</label>
                                    <div class="col-sm-8">
                                        {{ $p->pegawai_jabatan }}
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="umur" class="col-form-label col-sm-4 text-right">Umur :</label>
                                    <div class="col-sm-8">
                                        {{ $p->pegawai_umur }}
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label for="alamat" class="col-form-label col-sm-4 text-right">Alamat :</label>
                                    <div class="col-sm-8">
                                        {{ $p->pegawai_alamat }}
                                    </div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <a href="/pegawai" class="btn btn-primary">OK</a>
                                </div>
                            </div>


                    </div>
                </div>
            </div>
            </div>
            <br>


    </form>

	@endforeach

@endsection
