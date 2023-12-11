@extends('masterEAS')

@section('title', 'Counter')

@section('konten')

    <h2>Anda telah membuka URL ini sebanyak {{ $Jumlah }} kali</h2>

    {{--
    <h3>Data Counter</h3>

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
        @foreach ($counter as $counter)
            <tr>
                <td>{{ $counter->ID }}</td>
                <td>{{ $counter->Jumlah}}</td>
                <td>
                    <a href="/counter/viewsEAS/{{ $counter->ID }}" class="btn btn-success">View</a>
                    |
                    <a href="/counter/editEAS/{{ $counter->ID }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/counter/hapus/{{ $counter->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    --}}

@endsection
