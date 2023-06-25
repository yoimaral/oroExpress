@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="justify-content-right">
                        <a class="btn btn-outline-secondary" href="{{ route('cities.create') }}"> Crear proveedor</a>
                    </div>

                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Departamento</th>
                                        <th scope="col">Ciudad</th>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Eliminar</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($cities as $city)
                                        <tr class="">
                                            <td scope="row">{{ $city->department }}</td>
                                            <td scope="row">{{ $city->cities }}</td>
                                            <td scope="row">{{ $city->description }}</td>

                                            <td class="text-center">
                                                <form method="POST" action="{{ route('cities.destroy', $city) }}">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                                </form>
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('cities.edit', $city) }}">Actualizar</a>
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
