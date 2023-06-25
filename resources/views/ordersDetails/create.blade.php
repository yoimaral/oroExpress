@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="POST" action="{{ route('orderdetails.store') }}">
                        @csrf

                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Descripción</label>
                                <input type="text" name="description" id="description" class="form-control"
                                    placeholder="" aria-describedby="helpId">

                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Orden ID</label>
                                <input type="number" name="order_id" id="order_id" class="form-control" placeholder=""
                                    aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Producto Id</label>
                                <input type="number" name="product_id" id="product_id" class="form-control" placeholder=""
                                    aria-describedby="helpId" required>

                            </div>

                            <div class="justify-content-right">

                                <button type="submit" class="btn btn-outline-primary"> Crear</button>
                                <a class="btn btn-outline-primary" href="{{ route('orderdetails.index') }}"> Cancelar</a>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
