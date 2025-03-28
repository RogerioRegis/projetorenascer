@extends('layouts.web')

@section('title', 'NOVA OS')

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4 bg-dark-mode border-dark">
	
	<div class="card-header py-3 bg-dark-menu border-dark">
		<h5 class="m-0 font-weight-bold text-secondary"><i class="fas fa-fw fa-user-plus"></i> CADASTRANDO NOVO CLIENTE</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form method="POST" action="{{ route('clientes.store') }}" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<div class="row">
				<!-- SEGUNDA PARTE  --->
				<div class="col">
					<div class="form-row">
						<div class="col">
							<div class="form-group">
								<label for="nome">NOME DO CLIENTE</label>
								<input name="nome" type="text" class="form-control text-primary" placeholder="Nome">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="cpf">CPF/CNPJ</label>
								<input class="form-control text-primary" name="cpf" type="text" placeholder="CPF">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="contato">CONTATO</label>
								<input class="form-control text-primary" name="contato" type="text" placeholder="Fone">
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="col">
							<div class="form-group"><label for="veiculo">VEÍCULO/OBJETO</label>
								<input class="form-control text-primary" name="veiculo" type="text" placeholder="Veículo">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="placa">PLACA</label>
								<input class="form-control text-primary" name="placa" type="text" placeholder="Placa">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="cor">COR</label>
								<input class="form-control text-primary" name="cor" type="text" placeholder="Cor">
							</div>
						</div>
						<div class="col">
							<div class="form-group"><label for="ano">ANO</label>
								<input class="form-control text-primary" name="ano" type="text" placeholder="Ano">
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col">
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
