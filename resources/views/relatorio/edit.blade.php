@extends('layouts.web')

@section('title') ::Novo Reeducando @stop

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h5 class="m-0 font-weight-bold"><i class="fas fa-edit"></i> EDITAR RELATÓRIO</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form method="post" action="{{ route('relatorio.update', $relatorios->id) }}" enctype="multipart/form-data">
			@method('PATCH')
			@csrf
			<!-- Bloco 01 -->
			<div class="row">
				<div class="col">
					<div class="form-group">
						<label for="month" class="text-gray"><i class="far fa-calendar-alt"></i> MÊS</label>
						<input type="text" class="form-control text-primary" name="month" value="{{$relatorios->month}}">
					</div>
				</div>

				<div class="col">
					<div class="form-group">
						<label for="year" class="text-gray"><i class="fas fa-calendar-alt"></i> ANO</label>
						<input type="text" class="form-control text-primary" name="year" value="{{$relatorios->year}}">
					</div>
				</div>

				<div class="col">
					<div class="form-group">
						<label for="data_inicio" class="text-gray"><i class="fas fa-play"></i> INICIO</label>
						<input type="date" class="form-control text-primary" name="data_inicio" value="{{$relatorios->data_inicio}}">
					</div>
				</div>

				<div class="col">
					<div class="form-group">
						<label for="data_fim" class="text-gray"><i class="fas fa-stop"></i> FIM</label>
						<input type="date" class="form-control text-primary" name="data_fim" value="{{$relatorios->data_fim}}">
					</div>
				</div>

				<div class="col-lg-12">
					<div class="form-group">
						<a href="{{url('relatorio')}}" class="btn btn-secondary">
							<i class="fa fa-reply"></i> Cancelar</a>
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
	
	@endsection