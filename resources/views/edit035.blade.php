@extends('master')

@section('title', 'Edit Jumlah')

@section('konten')
    <h3>Edit Stock Sepatu</h3>

    <a class="btn btn-dark" href="/sepatu">Kembali</a>

    <br />
    <br />

    @foreach ($sepatu as $s)
        <form action="/sepatu/update" method="post">
            {{ csrf_field() }}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <input type="hidden" name="id" value="{{ $s->kodesepatu }}">

                        <div class="form-group row align-items-center">
                            <label for="merksepatu">Merk Sepatu</label>
                            <input type="text" required="required" name="merksepatu" value="{{ $s->merksepatu }}"
                            class="form-control">
                        </div>

                        <div class="form-group row align-items-center">
                             <label for="stocksepatu">Stock Sepatu</label>
                            <input type="number" required="required" name="stocksepatu" value="{{ $s->stocksepatu }}"
                                class="form-control">
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
