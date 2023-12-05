@extends('master')

@section('title', 'Tambah Stock Sepatu')

@section('konten')

    <h3>Penambahan Stock Sepatu</h3>

    <a class="btn btn-dark" href="/sepatu">Kembali</a>

    <br />
    <br />

    <form action="/sepatu/store" method="post">
        {{ csrf_field() }}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">

                    <div class="form-group row align-items-center">
                        <label for="merksepatu">Merk Sepatu</label>
                        <input type="text" class="form-control" id="merksepatu" name="merksepatu"
                            placeholder="Merk Sepatu">
                    </div>


                    <div class="form-group row align-items-center">
                        <label for="stocksepatu">Stock Sepatu</label>
                        <input type="number" class="form-control" id="stocksepatu" name="stocksepatu"
                            placeholder="Stock Sepatu">
                    </div>


                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mr-2" value="beli">Simpan Stock</button>
                    </div>

                </div>
            </div>
        </div>


    </form>

@endsection
