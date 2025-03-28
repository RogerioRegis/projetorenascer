@extends('layouts.valida')

@section('title') {{ $reeducando->nome }} @stop

@section('content')

<div class="container d-flex align-items-center flex-column mb-0">
	<img class="rounded-circle mb-0" src="{{url('images')}}/perfil_{{ $reeducando->id }}.jpg" alt="Foto_do_Perfil" height="180" />
	<!-- Masthead Subheading-->
	<p class="masthead-subheading font-weight-light"> REEDUCANDO </p>
	<h2 class="masthead-subheading mb-0 mt-0"> {{ $reeducando->nome }} </h2>
</div>

<div class="divider-custom divider-light mb-0 mt-0">
	<div class="divider-custom-line mb-0"></div>
	
	@if ( $reeducando->categoria == 'MECÂNICA E ELÉTRICA')
	<div class="divider-custom-icon mb-0"><i class="fas fa-wrench"></i></div>
	
	@elseif ( $reeducando->categoria == 'SERVIÇOS GERAIS')
	<div class="divider-custom-icon mb-0"><i class="fab fa-pagelines"></i></div>
	
	@elseif ( $reeducando->categoria == 'LANTERNAGEM')
	<div class="divider-custom-icon mb-0"><i class="fas fa-car-crash"></i></div>
	
	@elseif ( $reeducando->categoria == 'POSTO DE LAVAGEM')
	<div class="divider-custom-icon mb-0"><i class="fas fa-hands-wash"></i></div>

	@elseif ( $reeducando->categoria == 'SERRALHERIA')
	<div class="divider-custom-icon mb-0"><i class="fas fa-bolt"></i></div>

	@elseif ( $reeducando->categoria == 'MARCENARIA')
	<div class="divider-custom-icon mb-0"><i class="fas fa-hammer"></i></div>

	@elseif ( $reeducando->categoria == 'BORRACHARIA')
	<div class="divider-custom-icon mb-0"><i class="fas fa-exclamation-triangle"></i></div>

	@elseif ( $reeducando->categoria == 'BARBEARIA')
	<div class="divider-custom-icon mb-0"><i class="fas fa-cut"></i></div>
	
	@else
	<div class="divider-custom-icon mb-0"><i class="fab fa-pagelines"></i></div>
	
	@endif
	<div class="divider-custom-line"></div>
</div>

<h2 class="masthead-subheading"> {{ $reeducando->categoria }} </h2>

<p class="masthead-subheading font-weight-light mb-0"> CPF: {{ $reeducando->cpf }} </p>
<p class="masthead-subheading font-weight-light mb-0"> RG: {{ $reeducando->rg }} </p>

@endsection