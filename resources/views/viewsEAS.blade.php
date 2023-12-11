@extends('master')

@section('title', 'Data Counter')

@section('konten')

    <h3>View Counter</h3>

    <br />
    <br />

    @foreach ($counter as $c)
        <form action="/counter/update" method="post" class="form-horizontal">
            {{ csrf_field() }}

            <div class="container">
                <div class="row justify-content-center">
                    <div class="card-group">
                        <div class="card" style="width:600px">

                        </div>


                        <div class="card-body">

                            <div class="form-group row align-items-center">
                                <label for="ID" class="col-form-label col-sm-4 text-right">ID :</label>
                                <div class="col-sm-8">
                                    {{ $c->ID }}
                                </div>
                            </div>

                            <div class="form-group row align-items-center">
                                <label for="Jumlah" class="col-form-label col-sm-4 text-right">Jumlah :</label>
                                <div class="col-sm-8">
                                    {{ $c->Jumlah }}
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a href="/counter" class="btn btn-primary">OK</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </form>
    @endforeach

@endsection
