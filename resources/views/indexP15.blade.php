@extends('master')

@section('title', 'Keranjang Belanja')

@section('konten')

    <h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja/beli" class="btn btn-primary">+ Beli Barang</a>

    <br />
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->KP_ID }}</td>
                <td>{{ $k->KP_KodeBarang}}</td>
                <td>{{ $k->KP_Jumlah }}</td>
                <td>{{ number_format($k->KP_Harga,0,',','.')}}</td>
                <td>{{ number_format(($k->KP_Harga * $k->KP_Jumlah) ,0,',','.') }}</td>
                <td>
                    <a href="/keranjangbelanja/batal/{{ $k->KP_ID }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
