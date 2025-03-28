@extends('layouts.web')

@section('title', '404')

@section('content')

<div class="container-fluid">

	<!-- 404 Error Text -->
	<div class="text-center">
		<div class="error mx-auto" data-text="404">404</div>
		<p class="lead text-gray-800 mb-5">Página não encontrada</p>
		<p class="text-gray-500 mb-0">Parece que você encontrou uma falha na matriz ...</p>
		<a href="{{url('home')}}">&larr; Voltar para o painel</a>
	</div>

</div>

@endsection