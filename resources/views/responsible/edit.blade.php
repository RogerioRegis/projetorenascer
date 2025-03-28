@extends('layouts.web')
@section('title') Editar Responsável @stop
@section('content')


<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h5 class="m-0 font-weight-bold"><i class="fas fa-edit"></i> EDITAR RESPONSÁVEL</h5>
	</div>

	<!-------------------------------------- /header ------------------------------------------------->

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form method="post" action="{{ route('responsible.update', $responsible->id) }}" enctype="multipart/form-data">
			@method('PATCH')
			@csrf
			<!-- Bloco 01 -->
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="mome" class="text-gray"><i class="fa fa-user-shield"></i> NOME</label>
						<input type="text" class="form-control" name="nome" value="{{$responsible->nome}}">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label for="cargo" class="text-gray"><i class="fa fa-briefcase"></i> CARGO</label>
						<input type="text" class="form-control" name="cargo" value="{{$responsible->cargo}}">
					</div>
				</div>
				<div class="col-lg-12">
					<div class="form-group">
						<a href="{{url('responsible')}}" class="btn btn-secondary">
							<i class="fa fa-reply"></i> Cancelar</a>
							<button type="submit" class="btn btn-success fa-2x">
								ATUALIZAR <i class="fa fa-save"></i> 
							</button>  
						</div> 
					</div>
				</div>        
			</form>
		</div>
	</div>	

	@endsection