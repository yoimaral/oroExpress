@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Menu') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <a href="{{ route('customers.index') }}" class="btn btn-primary">Crear Proveedores</a>
                        <a href="{{ route('order.index') }}" class="btn btn-primary">Crear Ordenes</a>
                        <a href="{{ route('orderdetails.index') }}" class="btn btn-primary">Detalle de ordenes</a>
                        <a href="{{ route('cities.index') }}" class="btn btn-primary">Crear Ciudad para proveedores</a>
                        <a href="{{ route('products.index') }}" class="btn btn-primary">Crear Productos para ordenes
                            detalles</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
