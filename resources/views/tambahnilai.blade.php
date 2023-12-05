@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')
    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Nilai Kuliah</h3>

    <a href="/nilaikuliah"> Kembali</a>

    <br/>
    <br/>

    <form action="/nilaikuliah/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="NRP" class="col-sm-3 col-form-label text-right">NRP</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="NRP" name="NRP">
            </div>
        </div>

        <div class="form-group row">
            <label for="NilaiAngka" class="col-sm-3 col-form-label text-right">Nilai Angka</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="NilaiAngka" name="NilaiAngka">
            </div>
        </div>

        <div class="form-group row">
            <label for="SKS" class="col-sm-3 col-form-label text-right">SKS</label>
            <div class="col-sm-9">
                <textarea class="form-control" id="SKS" name="SKS"></textarea>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>

    </form>
@endsection
