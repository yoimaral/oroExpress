@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="justify-content-right">
                        <a class="btn btn-outline-secondary" href="{{ route('orderdetails.create') }}"> Crear proveedor</a>
                    </div>

                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Descripción</th>
                                        <th scope="col">Orden ID</th>
                                        <th scope="col">Producto ID</th>
                                        <th scope="col">Eliminar</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orderdetail as $orders)
                                        <tr class="">
                                            <td scope="row">{{ $orders->description }}</td>
                                            <td scope="row">{{ $orders->order_id }}</td>
                                            <td scope="row">{{ $orders->product_id }}</td>
                                            <td class="text-center">

                                                <form method="POST"
                                                    action="{{ route('orderdetails.destroy', $orders) }}">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                                </form>
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('orderdetails.edit', $orders) }}">Actualizar</a>
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
