@extends('layouts.my-dashboard-layout-cliente')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <h1>Hola Cliente</h1>
    
@endsection

@livewireStyles

@livewireScripts
