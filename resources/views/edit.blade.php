@extends('master')

@section('title', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" required="required" class="form-control" id="nama" placeholder="nama"
                    value="{{ $p->pegawai_nama }}">
            </div>

            <div class="form-group">
                <label for="jabatan">Jabatan</label>
                <input type="text" required="required" class="form-control" id="jabatan" placeholder="jabatan"
                    value="{{ $p->pegawai_jabatan }}">
            </div>

            <div class="form-group">
                <label for="umur">Umur</label>
                <input type="umur" required="required" class="form-control" id="umur" placeholder="umur"
                    value="{{ $p->pegawai_umur }}">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat">{{ $p->pegawai_alamat }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
        </form>
    @endforeach

@endsection
