@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="POST" action="{{ route('customers.store') }}">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control" placeholder=""
                                    aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Apellido</label>
                                <input type="text" name="lastname" id="lastname" class="form-control" placeholder=""
                                    aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Telefono</label>
                                <input type="number" name="phone" id="phone" class="form-control" placeholder=""
                                    aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Dirección</label>
                                <input type="text" name="address" id="address" class="form-control" placeholder=""
                                    aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Fecha de nacimiento</label>
                                <input type="date" name="birth_date" id="birth_date" class="form-control" placeholder=""
                                    aria-describedby="helpId">

                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">ID ciudad </label>
                                <select name="city_id" class="form-select" aria-label="Default select example">
                                    <option selected>Seleccionar ciudad</option>
                                    @foreach ($ciudades as $city)
                                        <option value="{{ $city->id }}">{{ $city->cities }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="justify-content-right">

                            <button type="submit" class="btn btn-outline-primary"> Crear proveedor</button>
                            <a class="btn btn-outline-primary" href="{{ route('customers.index') }}"> Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
