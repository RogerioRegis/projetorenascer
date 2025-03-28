@extends('layouts.web')

@section('title') Cliente @stop

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

    <h4 class="h3 mb-0 text-gray-800">{{ $clientes->nome }}</h4>

    <a href="{{ url('clientes/create') }}" 
    class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
    <i class="fas fa-user-plus text-white-50"></i> NOVO CLIENTE</a>
    
</div>

    CPF: <strong> {{ $clientes->cpf }}</strong><br>
    CONT: <strong>{{ $clientes->contato }}</strong>


    @endsection