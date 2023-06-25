@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="POST" action="{{ route('customers.update', $customer) }}">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Nombre</label>
                                <input value="{{ $customer->name}}" type="text" name="name" id="name"
                                    class="form-control" placeholder="" aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Apellido</label>
                                <input value="{{ $customer->lastname }}" type="text" name="lastname" id="lastname"
                                    class="form-control" placeholder="" aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Teléfono</label>
                                <input value="{{ $customer->phone }}" type="number" name="phone" id="phone"
                                    class="form-control" placeholder="" aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Dirección</label>
                                <input value="{{ $customer->address }}" type="text" name="address" id="address"
                                    class="form-control" placeholder="" aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Fecha de nacimiento</label>
                                <input value="{{ $customer->birth_date }}" type="date" name="birth_date" id="birth_date"
                                    class="form-control" placeholder="" aria-describedby="helpId">

                            </div>

                        </div>

                        <div class="justify-content-right">

                            <button type="submit" class="btn btn-outline-primary"> Actualizar proveedor</button>
                            <a class="btn btn-outline-primary" href="{{ route('customers.index') }}"> Cancelar</a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
