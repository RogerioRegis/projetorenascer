@extends('layouts.web')

@section('title') ::Novo Reeducando @stop

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h5 class="m-0 font-weight-bold"><i class="fas fa-fw fa-calendar-plus"></i> CADASTRAR NOVO ANO</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form method="post" action="{{ route('year.store') }}" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<!-- Bloco 01 -->
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="year" class="text-gray"><i class="far fa-calendar"></i> ANO</label>
						<input type="text" class="form-control text-primary" name="year" placeholder="Ano">
					</div>
				</div>

				<div class="col-lg-12">
					<div class="form-group">
						<a href="{{url('year')}}" class="btn btn-secondary">
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