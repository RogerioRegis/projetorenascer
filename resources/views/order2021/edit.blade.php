@extends('layouts.web')

@section('title') Editar Relatório @stop

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h4 class="m-0 font-weight-bold text-uppercase"><i class="fas fa-edit"></i> 
			EDITAR RELATÓRIO - MÊS: <span class="text-primary">{{$vinte_um_orders->report_month}} </span>ANO: <span class="text-primary">{{$vinte_um_orders->report_year}}</span>
		</h4>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>{{ $message }}</strong>
		</div>
		@endif

		@if (count($errors) > 0)
		<div class="alert alert-danger text-uppercase">
			<strong>Opa!</strong> Houve alguns problemas com o arquivo!
			<ul>
				@foreach ($errors->all() as $error)
				<li><strong>{{ $error }}</strong></li>
				@endforeach
			</ul>
		</div>
		@endif

		<form method="post" action="{{ route('order2021.update', $vinte_um_orders->id) }}" enctype="multipart/form-data">
			@method('PATCH')
			@csrf
			<!-- Bloco 01 -->
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="report_month" class="text-gray"><i class="fas fa-calendar-day"></i> MÊS</label>
						<select class="custom-select text-primary" name="report_month">
							<option >{{$vinte_um_orders->report_month}}</option>
							<option value="janeiro">1 - JANEIRO</option>
							<option value="fevereiro">2 - FEVEREIRO</option>
							<option value="marco">3 - MARÇO</option>
							<option value="abril">4 - ABRIL</option>
							<option value="maio">5 - MAIO</option>
							<option value="junho">6 - JUNHO</option>
							<option value="julho">7 - JULHO</option>
							<option value="agosto">8 - AGOSTO</option>
							<option value="setembro">9 - SETEMBRO</option>
							<option value="outubro">10 - OUTUBRO</option>
							<option value="novembro">11 - NOVEMBRO</option>
							<option value="dezembro">12 - DEZEMBRO</option>
						</select>
					</div>
				</div>

				<div class="col">
					<div class="form-group">
						<label for="report_year" class="text-gray"><i class="fas fa-calendar-plus"></i> ANO</label>
						<select class="custom-select text-primary" name="report_year">
							<option >2021</option>
						</select>
					</div>
				</div>

				<div class="col">
					<div class="form-group">
						<label class="text-strong">ARQUIVO</label>
						<input type="file" class="form-control text-primary" name="report" value="{{$vinte_um_orders->image}}">
					</div>
				</div>

				<div class="col-lg-12">
					<div class="form-group">
						<a href="{{url('order2021')}}" class="btn btn-secondary">
							<i class="fa fa-reply"></i> VOLTAR</a>
							<button type="submit" class="btn btn-success fa-2x">
								SALVAR <i class="fa fa-save"></i> 
							</button>  
						</div> 
					</div>
				</div>        
			</form>
			<!-- FIM DO Formulário -->
		</div>
	</div>

	<div class="embed-responsive embed-responsive-16by9">
		<iframe class="embed-responsive-item" src="{{url('reports')}}/{{$vinte_um_orders->report_month}}_2021.pdf" allowfullscreen></iframe>
	</div>

	@endsection