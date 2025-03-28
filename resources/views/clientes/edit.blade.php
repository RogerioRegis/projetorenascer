@extends('layouts.web')

@section('title', 'EDITAR OS')

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h5 class="m-0 font-weight-bold text-secondary"><i class="fas fa-edit"></i> EDITANDO ORDEM DE SERVIÇO</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form action="{{ route('clientes.update', $clientes->id) }}" method="post" enctype="multipart/form-data">
			@method('PATCH')
			@csrf

			<div class="row">
				<!-- SEGUNDA PARTE  --->
				<div class="col">
					<div class="form-row">
						<div class="col">
							<div class="form-group">
								<label for="nome">NOME DO CLIENTE</label>
								<input name="nome" type="text" class="form-control text-primary" 
								value="{{ $clientes->nome }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="cpf">CPF/CNPJ</label>
								<input class="form-control text-primary" name="cpf" type="text" 
								value="{{ $clientes->cpf }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="contato">CONTATO</label>
								<input class="form-control text-primary" name="contato" type="text" 
								value="{{ $clientes->contato }}">
							</div>
						</div>
					</div>


					<div class="form-row">
						<div class="col">
							<div class="form-group"><label for="veiculo">VEÍCULO/OBJETO</label>
								<input class="form-control text-primary" name="veiculo" type="text" 
								value="{{ $clientes->veiculo }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="placa">PLACA</label>
								<input class="form-control text-primary" name="placa" type="text" 
								value="{{ $clientes->placa }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="cor">COR</label>
								<input class="form-control text-primary" name="cor" type="text" 
								value="{{ $clientes->cor }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="ano">ANO</label>
								<input class="form-control text-primary" name="ano" type="text" 
								value="{{ $clientes->ano }}">
							</div>
						</div>
					</div>
				</div>

				<div class="form-row">
					<div class="col-md-5">
						<div class="form-group btn btn-primary btn-icon-split">
							<span class="icon text-white-50"><i class="fas fa-save"></i></span>
							<button type="submit" class="btn btn-primary">SALVAR</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	@endsection
