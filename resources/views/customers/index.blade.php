@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="justify-content-right">
                        <a class="btn btn-outline-secondary" href="{{ route('customers.create') }}"> Crear proveedor</a>
                    </div>

                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido</th>
                                        <th scope="col">Dirección</th>
                                        <th scope="col">Telefono</th>
                                        <th scope="col">Fecha de Nascimiento</th>
                                        <th scope="col">ID ciudad</th>
                                        <th scope="col">Eliminar</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($custom as $customers)
                                        <tr class="">
                                            <td scope="row">{{ $customers->name }}</td>
                                            <td scope="row">{{ $customers->lastname }}</td>
                                            <td scope="row">{{ $customers->address }}</td>
                                            <td scope="row">{{ $customers->phone }}</td>
                                            <td scope="row">{{ $customers->birth_date }}</td>
                                            <td scope="row">{{ $customers->city_id }}</td>

                                            <td class="text-center">
                                                <form method="POST" action="{{ route('customers.destroy', $customers) }}">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                                </form>
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('customers.edit', $customers) }}">Actualizar</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <a class="btn btn-outline-primary" href="{{ route('home') }}">Regresar al Home</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
