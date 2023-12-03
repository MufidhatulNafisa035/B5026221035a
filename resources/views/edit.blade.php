@extends('master')

@section('title', 'Edit Pegawai')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Edit Pegawai</h3>

    <a class="btn btn-dark" href="/pegawai">Kembali</a>

    <br />
    <br />

    @foreach ($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
                        <div class="form-group row align-items-center">
                            <label for="nama">Nama</label>
                            <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"
                                class="form-control">

                        </div>
                        <div class="form-group row align-items-center">
                            <label for="jabatan">Jabatan</label>
                            <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"
                                class="form-control">
                        </div>

                        <div class="form-group row align-items-center">
                            <label for="umur">Umur</label>
                            <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"
                                class="form-control">
                        </div>

                        <div class="form-group row align-items-center">
                            <label for="alamat">Alamat</label>
                            <textarea required="required" name="alamat" class="form-control" placeholder="Masukkan Alamat">{{ $p->pegawai_alamat }}</textarea>
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mr-2" value="Simpan Data">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    @endforeach
@endsection
