@extends('layouts.list')

@section('title') Novo Reeducando @stop

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h5 class="m-0 font-weight-bold"><i class="fas fa-fw fa-user"></i> CADASTRAR NOVO REEDUCANDO</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form method="post" action="{{ route('reeducandos.store') }}" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<div class="form-row mb-2">
			    <!-- Bloco 01 -->
				<div class="col-lg-2">
					<div class="form-group">
						<label for="ide" class="text-gray">ID</label>
						<input type="text" class="form-control text-primary" name="ide" placeholder="ID">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
						<label for="mome" class="text-gray">NOME</label>
						<input type="text" class="form-control text-primary" name="nome" placeholder="Nome">
						@include('section.erro')
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label for="categoria">OFICINA/SETOR</label>
						<select class="custom-select text-primary" name="categoria">
							<option selected>Selecione...</option>
							@foreach($categorias as $categoria)
							<option>{{$categoria->nome}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<!-- Bloco 02 -->
				<div class="col-lg-3">
					<div class="form-group">
						<label for="local" class="text-gray">LOCAL</label>
						<select class="custom-select text-primary" name="local">
							<option>Selecione...</option>
							<option>GARAGEM DO GOVERNO</option>
							<option>SEJUC</option>
							<option>PAMC</option>
							<option>PMRR</option>
							<option>CPFBV</option>
						</select>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="form-group">
						<label for="mae" class="text-gray">NOME DA MÃE</label>
						<input type="text" class="form-control text-primary" name="mae" placeholder="Mãe">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="form-group">
						<label for="pai" class="text-gray">NOME DO PAI</label>
						<input type="text" class="form-control text-primary" name="pai" placeholder="Pai">
					</div>
				</div>
				<!---
				<div class="col-lg-4">
					<div class="form-group">
						<label for="cor" class="text-gray"><i class="fas fa-paint-brush"></i> COR</label>
						<select class="custom-select text-primary" name="cor">
							<option>VERMELHO</option>
							<option>VERDE</option>
							<option>AZUL-DOURADO</option>
							<option>AZUL</option>
						</select>
					</div>
				</div>
			    -->
				<div class="col-lg-12">
					<div class="form-group">
						<a href="{{url('reeducandos')}}" class="btn btn-secondary">
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