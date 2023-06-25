@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="justify-content-right">
                        <a class="btn btn-outline-secondary" href="{{ route('order.create') }}"> Crear proveedor</a>
                    </div>

                    <div class="row">
                        <div class="table-responsive">
                            <table class="table table-primary">
                                <thead>
                                    <tr>
                                        <th scope="col">Total</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">fecha entrega</th>
                                        <th scope="col">Fecha creación</th>
                                        <th scope="col">Eliminar</th>
                                        <th scope="col">Actualizar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $orders)
                                        <tr class="">
                                            <td scope="row">{{ $orders->total }}</td>
                                            <td scope="row">{{ $orders->status }}</td>
                                            <td scope="row">{{ $orders->created_at }}</td>
                                            <td scope="row">{{ $orders->date_delivery }}</td>
                                            <td class="text-center">
                                                <form method="POST" action="{{ route('order.destroy', $orders) }}">

                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                                </form>
                                            </td>

                                            <td class="text-center">
                                                <a class="btn btn-outline-primary"
                                                    href="{{ route('order.edit', $orders) }}">Actualizar</a>
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
