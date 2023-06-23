@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($custom as $customers)


                                    <tr class="">
                                        <td scope="row">{{ $customers->name }}</td>
                                        <td scope="row">{{ $customers->lastName }}</td>
                                        <td scope="row">{{ $customers->address }}</td>
                                        <td scope="row">{{ $customers->phone }}</td>
                                        <td scope="row">{{ $customers->birth_date }}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
