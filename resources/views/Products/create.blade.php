@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="POST" action="{{ route('products.store') }}">
                    @csrf
                    <div class="row">

                        <div class="mb-3">
                            <label for="" class="form-label">Descripción</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder=""
                                aria-describedby="helpId" required>

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Cantidad</label>
                            <input type="number" name="amount" id="amount" class="form-control" placeholder=""
                                aria-describedby="helpId" required>

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Valor</label>
                            <input type="number" name="value" id="value" class="form-control" placeholder=""
                                aria-describedby="helpId" required>

                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Estado</label>
                            <input type="text" name="status" id="status" class="form-control" placeholder=""
                                aria-describedby="helpId">

                        </div>

                    </div>
                    <div class="justify-content-right">

                        <button type="submit" class="btn btn-outline-primary"> Crear</button>
                        <a class="btn btn-outline-primary" href="{{ route('products.index') }}"> Cancelar</a>
                </div>
            </form>


                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
