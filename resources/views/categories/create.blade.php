@extends('layouts.web')

@section('title') ::Novo Reeducando @stop

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h5 class="m-0 font-weight-bold"><i class="fas fa-fw fa-user"></i> CADASTRAR NOVA CATEGORIA</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<!-- Bloco 01 -->
			<div class="row">
				<div class="col-lg-6">
					<div class="form-group">
						<label for="mome" class="text-gray"><i class="fas fa-fw fa-wrench"></i> NOME DA CATEGORIA</label>
						<input type="text" class="form-control text-uppercase" name="nome" placeholder="Nome">
					</div>
				</div>
				
				<div class="col-lg-12">
					<div class="form-group">
						<a href="{{url('reeducating')}}" class="btn btn-secondary">
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