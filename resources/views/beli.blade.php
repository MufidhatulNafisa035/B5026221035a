@extends('master')

@section('title', 'Beli Barang')

@section('konten')

    <h3>Pembelian Barang</h3>

    <a class="btn btn-dark" href="/keranjangbelanja">Kembali</a>

    <br />
    <br />

    <form action="/keranjangbelanja/store" method="post">
        {{ csrf_field() }}

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">

                    <div class="form-group row align-items-center">
                        <label for="kodebarang">Kode Barang</label>
                        <input type="text" class="form-control" id="kodebarang" name="kodebarang" placeholder="Kode Barang">
                    </div>

                    <div class="form-group row align-items-center">
                        <label for="jumlah">Jumlah Pembeliaan</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Pembelian">
                    </div>

                    <div class="form-group row align-items-center">
                        <label for="harga">Harga Per Item</label>
                        <input type="number" class="form-control" id="harga" name="harga" placeholder="Harga Per Item">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary mr-2" value="beli">Beli</button>
                    </div>

                </div>
            </div>
        </div>


    </form>

@endsection
