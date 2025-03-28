@extends('layouts.web')

@section('title') Novo Reeducando @stop

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4 bg-dark-mode border-dark">

	<div class="card-header py-3 bg-dark-mode border-dark">
		<h5 class="m-0 font-weight-bold"><i class="fas fa-fw fa-user"></i> CADASTRAR NOVO REEDUCANDO</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-600 font-weight-bold bg-dark-mode border-dark">

		<form method="post" action="{{ route('reeducating.store') }}" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<!-- Bloco 01 -->
			<div class="row">
				<div class="col-lg-5">
					<div class="form-group">
						<label for="mome" class="text-gray"><i class="fa fa-user"></i> NOME</label>
						<input type="text" class="form-control text-white bg-dark-mode border-dark" name="nome" placeholder="Nome">
						@include('section.erro')
					</div>
				</div>
				<div class="col-lg-5">
					<div class="form-group">
						<label for="categoria"><i class="fas fa-tag"></i> CATEGORIA</label>
						<select class="custom-select bg-dark-mode text-white border-dark" name="categoria">
							<option selected>Selecione...</option>
							@foreach($categorias as $categoria)
							<option>{{$categoria->nome}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-lg-2">
					<div class="form-group">
						<label for="status" class="text-gray"><i class="fa fa-user-tag"></i> STATUS</label>
						<input type="text" class="form-control bg-dark-mode text-white border-dark" name="status" value="ATIVO">
					</div>
				</div>

				<!-- Bloco 02 -->
				<div class="col-lg-4">
					<div class="form-group">
						<label for="data_entrada" class="text-gray"><i class="fa fa-calendar"></i> DATA DE ENTRADA</label>
						<input type="date" class="form-control bg-dark-mode text-white border-dark" name="data_entrada" placeholder="Data">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label for="paid" class="text-gray"><i class="fas fa-dollar-sign"></i> REMUNERADO</label>
						<select class="custom-select bg-dark-mode text-white border-dark" name="paid">
							<option>SIM</option>
							<option>NÃO</option>
						</select>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label><i class="fas fa-paint-brush"></i> COR</label>
						<select class="custom-select bg-dark-mode text-white border-dark" name="cor">
							<option>VERMELHO</option>
							<option>VERDE</option>
							<option>AZUL-DOURADO</option>
							<option>AZUL</option>
						</select>
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