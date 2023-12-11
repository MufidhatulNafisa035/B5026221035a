@extends('master')

@section('title', 'Edit Counter')

@section('konten')
    <h3>Edit Counter</h3>

    <a class="btn btn-dark" href="/counter">Kembali</a>

    <br />
    <br />

    @foreach ($counter as $c)
        <form action="/counter/update" method="post">
            {{ csrf_field() }}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <input type="hidden" name="ID" value="{{ $c->ID }}">

                        <div class="form-group row align-items-center">
                             <label for="Jumlah">Jumlah</label>
                            <input type="number" required="required" name="Jumlah" value="{{ $c->Jumlah }}"
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
