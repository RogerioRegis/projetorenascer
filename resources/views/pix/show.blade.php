@extends('layouts.web')

@section('title') Reeducando @stop

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h1 class="h3 mb-0 text-gray-800">GANHOS DO REEDUCANDO {{ $reeducandos->nome }} MÊS DE: </h1>
	<a href="{{ route('reeducating.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i
		class="fas fa-calendar-alt text-white-50"></i> + NOVO MÊS</a>
	</div>

	<nav class="nav nav-borders">
		<a class="nav-link ms-0" href="{{ route('reeducating.show', $reeducandos->id) }}">Perfil</a>
		<a class="nav-link active" href="{{ route('reeducando.show', $reeducandos->id) }}">Ganhos</a>
		<a class="nav-link" href="#">Notificação</a>
	</nav>
	<hr class="mt-0 mb-4" />
	
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-body">
			


			
		</div>
	</div>

	
	@endsection