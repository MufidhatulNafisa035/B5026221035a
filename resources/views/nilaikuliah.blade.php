@extends('master')

@section('title', 'Nilai Kuliah')

@section('konten')

    <h2>malasngoding corp</h2>
    <h3>Data Nilai Kuliah</h3>

    <a href="/nilaikuliah/tambahnilai" class="mb-4 btn btn-primary"> + Tambah Nilai Kuliah</a>

    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot Nilai</th>
        </tr>
        @foreach($nilaikuliah as $nk)
        <tr>
            <td>{{ $nk->ID }}</td>
            <td>{{ $nk->NRP }}</td>
            <td>{{ $nk->NilaiAngka }}</td>
            <td>{{ $nk->SKS }}</td>
            <td>
                @php
                $nilaiAngka = $nk->NilaiAngka;
                $nilaiHuruf = '';

                if ($nilaiAngka <= 40) {
                    $nilaiHuruf = 'D';
                } elseif ($nilaiAngka <= 60) {
                    $nilaiHuruf = 'C';
                } elseif ($nilaiAngka <= 80) {
                    $nilaiHuruf = 'B';
                } else {
                    $nilaiHuruf = 'A';
                }
                echo $nilaiHuruf;
                @endphp
            </td>
            <td>{{ $nk->NilaiAngka * $nk->SKS }}</td> <!-- Perkalian dilakukan di sini -->
            {{-- <td>
                <a href="/nilaikuliah/view/{{ $nk->ID }}" class="btn btn-success">View</a>
                {{-- <a href="/nilaikuliah/edit/{{ $nk->ID }}" class="btn btn-warning">Edit</a>
                <a href="/nilaikuliah/hapus/{{ $nk->ID }}" class="btn btn-danger">Hapus</a> --}}
            {{-- </td> --}}
        </tr>
        @endforeach
    </table>
@endsection
