@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a class="btn btn-dark" href="/pegawai">Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post">
        {{ csrf_field() }}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="form-group row align-items-center">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama">
                    </div>

                    <div class="form-group row align-items-center">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="Jabatan">
                    </div>

                    <div class="form-group row align-items-center">
                        <label for="umur">Umur</label>
                        <input type="number" class="form-control" id="umur" name="umur" placeholder="Umur">
                    </div>

                    <div class="form-group row align-items-center">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat"></textarea>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mr-2" value="Simpan Data">Simpan Data</button>
                    </div>
                </div>
            </div>
        </div>


    </form>

@endsection
