@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="POST" action="{{ route('cities.update', $city) }}">
                        @csrf
                        @method('PATCH')
                        <div class="mb-3">
                            <label for="" class="form-label">Departamento </label>
                            <input value="{{ $city->department }}" type="text" name="department" id="department" class="form-control" placeholder=""
                                aria-describedby="helpId" required>

                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Ciudad </label>
                            <input value="{{ $city->cities }}" type="text" name="cities" id="cities" class="form-control" placeholder=""
                                aria-describedby="helpId" required>

                        </div>

                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Descripción</label>
                                <input value="{{ $city->description }}" type="text" name="description" id="description" class="form-control"
                                    placeholder="" aria-describedby="helpId">

                            </div>

                            <div class="justify-content-right">

                                <button type="submit" class="btn btn-outline-primary"> Editar</button>
                                <a class="btn btn-outline-primary" href="{{ route('cities.index') }}"> Cancelar</a>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
