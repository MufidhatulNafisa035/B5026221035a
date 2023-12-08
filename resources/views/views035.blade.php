@extends('master')

@section('title', 'Data Sepatu')

@section('konten')

    <h3>View Sepatu</h3>

    <br />
    <br />

    @foreach ($sepatu as $s)
        <form action="/sepatu/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="card-group">
                        <div class="card" style="width:600px">

                        </div>


                        <div class="card-body">

                            <div class="form-group row align-items-center">
                                <label for="kodesepatu" class="col-form-label col-sm-4 text-right">Kode Sepatu :</label>
                                <div class="col-sm-8">
                                    {{ $s->kodesepatu }}
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label for="merksepatu" class="col-form-label col-sm-4 text-right">Merk Sepatu :</label>
                                <div class="col-sm-8">
                                    {{ $s->merksepatu }}
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label for="stocksepatu" class="col-form-label col-sm-4 text-right">Stock Sepatu :</label>
                                <div class="col-sm-8">
                                    {{ $s->stocksepatu }}
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label for="tersedia" class="col-form-label col-sm-4 text-right">Tersedia :</label>
                                <div class="col-sm-8">
                                <input type="checkbox" disabled {{ $s->tersedia == 1 ? 'checked' : '' }}>
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a href="/sepatu" class="btn btn-primary">OK</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </form>
    @endforeach

@endsection
