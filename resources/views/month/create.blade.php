@extends('layouts.list')

@section('title') ::Novo Mês @stop

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h5 class="m-0 font-weight-bold"><i class="fas fa-fw fa-calendar"></i> CRIAR NOVO MÊS</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form method="post" action="{{ route('month.store') }}">
			@method('POST')
			@csrf
			<div class="row">
				<div class="dropdown-divider"></div>
				<div class="form-row">
					<div class="col-md-4">
						<div class="form-group">
							<label for="month">MÊS</label>
							<input class="form-control text-primary" name="month" type="text" value="{{old('month')}}" placeholder="MÊS" required>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="year">ANO</label>
							<input class="form-control text-primary" name="year" type="text" id="year" value="{{old('year')}}" placeholder="ANO">
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group"><label for="outros">OBS.</label>
							<input class="form-control text-primary" name="outros" type="text" id="fone" value="{{old('outros')}}" placeholder="">
						</div>
					</div>
				</div>
				<div class="dropdown-divider"></div>
			</div>

			<!-- SALVAR  --->
			<div class="form-row">
				<div class="col-md-5">
					<a href="{{url('month')}}" class="btn btn-secondary"><i class="fa fa-reply"></i> Cancelar</a>
					<button type="submit" class="btn btn-success fa-2x">SALVAR <i class="fa fa-save"></i> </button>
				</div>
			</div>

		</form>
		<!-- FIM DO Formulário -->
	</div>
</div>

@endsection



