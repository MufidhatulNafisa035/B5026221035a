@extends('master')

@section('title', 'Data Counter')

@section('konten')

    <h3>Data Counter</h3>

    <a class="btn btn-dark" href="/counter">Kembali</a>

    <br />
    <br />

    <form action="/counter/store" method="post">
        {{ csrf_field() }}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">

                    <div class="form-group row align-items-center">
                        <label for="Jumlah">Jumlah</label>
                        <input type="number" class="form-control" id="Jumlah" name="Jumlah" placeholder="Jumlah">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mr-2" value="Simpan Data">Simpan Data</button>
                    </div>
                </div>
            </div>
        </div>


    </form>

@endsection
