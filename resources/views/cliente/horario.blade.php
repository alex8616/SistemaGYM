@extends('layouts.my-dashboard-layout-cliente')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <h1>Horario</h1>
    <div class="col-md-6">
        <div class="card">
        <h5 class="card-header">Form Controls</h5>
        <div class="card-body">
            <div class="mb-4">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="name@example.com" />
            </div>
            <div>
            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
        </div>
        </div>
    </div>
@endsection
