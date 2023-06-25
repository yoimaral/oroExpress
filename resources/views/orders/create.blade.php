@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <form method="POST" action="{{ route('order.store') }}">
                        @csrf
                        <div class="row">
                            <div class="mb-3">
                                <label for="" class="form-label">Id</label>
                                <input type="number" name="order_id" id="order_id" class="form-control" placeholder=""
                                    aria-describedby="helpId" required>

                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Total</label>
                                <input type="number" name="total" id="total" class="form-control" placeholder=""
                                    aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Status</label>
                                <input type="text" name="status" id="status" class="form-control" placeholder=""
                                    aria-describedby="helpId" required>

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Fecha de envío</label>
                                <input type="date" name="date_delivery" id="date_delivery" class="form-control"
                                    placeholder="" aria-describedby="helpId" required>

                            </div>

                            <div class="justify-content-right">

                                <button type="submit" class="btn btn-outline-primary"> Crear orden</button>
                                <a class="btn btn-outline-primary" href="{{ route('order.index') }}"> Cancelar</a>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
