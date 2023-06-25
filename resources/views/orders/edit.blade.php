@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="POST" action="{{ route('order.update', $order) }}">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Total</label>
                                <input value="{{ $order->total }}" type="number" name="total" id="total"
                                    class="form-control" placeholder="" aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <input value="{{ $order->status }}" type="text" name="status" id="status"
                                    class="form-control" placeholder="" aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Fecha de envío</label>
                                <input value="{{ $order->date_delivery }}" type="date" name="date_delivery" id="date_delivery"
                                    class="form-control" placeholder="" aria-describedby="helpId" required>

                            </div>

                            <div class="justify-content-right">

                                <button type="submit" class="btn btn-outline-primary"> Actualizar proveedor</button>
                                <a class="btn btn-outline-primary" href="{{ route('order.index') }}"> Cancelar</a>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
