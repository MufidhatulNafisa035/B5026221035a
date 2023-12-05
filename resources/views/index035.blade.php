@extends('master')

@section('title', 'Data Sepatu')

@section('konten')

    <h3>Data Sepatu</h3>

    <a href="/sepatu/stock" class="btn btn-primary">+ Stock Sepatu</a>

    <br />
    <p>Cari Sepatu berdasarkan Merk :</p>
    <form action="/sepatu/cari" method="GET">
        <input class="form-control" type="text" name="cari" placeholder="Cari Sepatu .."
            value="{{ old('cari', isset($cari) ? $cari : '') }}">
        <input class="btn btn-primary" type="submit" value="CARI">
    </form>
    <br />

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Sepatu</th>
            <th>Merk Sepatu</th>
            <th>Stock Sepatu</th>
            <th>Tersedia</th>
            <th>Action</th>
        </tr>
        @foreach ($sepatu as $s)
            <tr>
                <td>{{ $s->kodesepatu }}</td>
                <td>{{ $s->merksepatu}}</td>
                <td>{{ $s->stocksepatu }}</td>
                <td>
                    <input type="checkbox" disabled {{ $s->tersedia == 1 ? 'checked' : '' }}>
                </td>
                <td>
                    <a href="/sepatu/edit035/{{ $s->kodesepatu }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/sepatu/hapus/{{ $s->kodesepatu }}" class="btn btn-danger">Hapus</a>
                </td>
                {{-- <td>
                  //<a href="/tersedia/batal/{{ $s->kodesepatu }}" class="btn btn-danger">Batal</a>
                //</td> --}}
            </tr>
        @endforeach
    </table>
@endsection
