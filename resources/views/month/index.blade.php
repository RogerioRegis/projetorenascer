@extends('layouts.list')

@section('title', 'Meses')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h1 class="h3 mb-0 text-gray-800">MÊS DE REFERÊNCIA</h1>
	<a href="{{ route('month.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
		<i class="fas fa-calendar fa-sm text-white-50"></i> NOVO MÊS</a>
	</div>

	<hr>

	<div class="row">
		@foreach ( $months as $month )
		<div class="col-xl-3 col-md-3 mb-3">
			<div class="card border-left-secondary shadow h-100 py-0">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-0">
							<div class="font-weight-bold text-secondary text-uppercase mb-1">{{ $month->month }}</div>
							<div class="btn-group" role="group" aria-label="Basic example">
								<a class="btn btn-secondary" href="{{url('month')}}/{{ $month->id }}/edit"><i class="fas fa-edit text-gray-300"></i></a>
								<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" 
								href="{{url('month')}}/{{ $month->id }}" role="button" target="_blank">Vizualizar</a>
							</div>
						</div>
						<div class="col-auto">
							<a class="fas fa-calendar-alt fa-2x text-gray-300" href="{{url('month')}}/{{ $month->id }}" role="button" target="_blank"></a>
						<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">{{ $month->year }}</div></div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>

	<hr>

	@endsection
