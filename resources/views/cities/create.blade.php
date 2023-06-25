@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="POST" action="{{ route('cities.store') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Departamento </label>
                            <input type="text" name="department" id="department" class="form-control" placeholder=""
                                aria-describedby="helpId" required>

                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Ciudad </label>
                            <input type="text" name="cities" id="cities" class="form-control" placeholder=""
                                aria-describedby="helpId" required>

                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Descripción</label>
                                <input type="text" name="description" id="description" class="form-control"
                                    placeholder="" aria-describedby="helpId">

                            </div>

                            <div class="justify-content-right">

                                <button type="submit" class="btn btn-outline-primary"> Crear</button>
                                <a class="btn btn-outline-primary" href="{{ route('cities.index') }}"> Cancelar</a>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
