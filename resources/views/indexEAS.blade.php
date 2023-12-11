@extends('master')

@section('title', 'Counter')

@section('konten')

    <h3>Data Counter</h3>

    <p for="counter_views">Anda telah membuka URL ini sebanyak {{ session('counter_views') }} kali</p>

    <a href="/counter/tambahEAS" class="btn btn-primary">+ Tambah Counter</a><br>

    <br />
    <p>Cari Counter Berdasarkan ID :</p>
    <form action="/counter/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Counter .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}"><br>
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>Jumlah</th>
            <th>Action</th>
        </tr>
        @foreach ($counter as $c)
            <tr>
                <td>{{ $c->ID }}</td>
                <td>{{ $c->Jumlah}}</td>
                <td>
                    <a href="/counter/viewsEAS/{{ $c->ID }}" class="btn btn-success">View</a>
                    |
                    <a href="/counter/editEAS/{{ $c->ID }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/counter/hapus/{{ $c->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
