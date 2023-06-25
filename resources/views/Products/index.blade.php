@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="justify-content-right">
                        <a class="btn btn-outline-secondary" href="{{ route('products.create') }}"> Crear proveedor</a>
                    </div>

                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">descripción</th>
                                        <th scope="col">Cantidad</th>
                                        <th scope="col">Valor</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">Eliminar</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr class="">
                                            <td scope="row">{{ $product->description }}</td>
                                            <td scope="row">{{ $product->amount }}</td>
                                            <td scope="row">{{ $product->value }}</td>
                                            <td scope="row">{{ $product->status }}</td>
                                            <td class="text-center">
                                                <form method="POST" action="{{ route('products.destroy', $product) }}">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                                </form>
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('products.edit', $product) }}">Actualizar</a>
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
