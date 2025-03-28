@extends('layouts.form')

@section('title', 'EDITANDO ORÇAMENTO')

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4 bg-dark-mode border-dark">
	
	<div class="card-header py-3 bg-dark-menu border-dark">
		<h5 class="m-0 font-weight-bold text-danger"><i class="fas fa-edit"></i> EDITANDO ORÇAMENTO / AGENDAMENTO</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-600 font-weight-bold">

		<form action="{{ route('agenda.update', $orders->id) }}" method="post" enctype="multipart/form-data">
			@method('PATCH')
			@csrf

			<div class="row">
				
				<!-- PRIMEIRA PARTE  --->
				<div class="col-md-7">

					@include('includes.alerts')

					<div class="form-row">
						<div class="col-md-8">
							<div class="form-group">
								<label for="cliente">NOME/SECRETARIA</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="cliente" type="text"
								value="{{ $orders->cliente }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="contato">CONTATO</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="contato" type="text"
								value="{{ $orders->contato }}">
							</div>
						</div>
					</div>
		
					<div class="form-row">
						<div class="col">
							<div class="form-group">
								<label for="veiculo">VEÍCULO/OBJETO</label>
								<input name="veiculo" type="text" class="form-control text-white bg-dark-mode border border-dark"
								value="{{ $orders->veiculo }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="marca">MARCA</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="marca" type="text"
								value="{{ $orders->marca }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="placa">PLACA</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="placa" type="text"
								value="{{ $orders->placa }}">
							</div>
						</div>
					</div>

					<div class="form-row">
						<div class="col-4">
							<div class="form-group">
								<label for="cor">COR</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="cor" type="text"
								value="{{ $orders->cor }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="ano">ANO</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="ano" type="text" 
								value="{{ $orders->ano }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="data_entrada">DATA DO ORÇAMENTO</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="data_entrada" type="date" 
								value="{{ $orders->data_entrada }}">
							</div>
						</div>
					</div>

					<hr class="hr text-white mt-0" />

					<!-- **...COMEÇO DA DESCRIÇÃO DOS SERVIÇOS...**  --->
					<div class="form-row">
						<div class="col-2">
							<label for="description">QUANT.</label>
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q1" name="q1" type="text" value="{{ $orders->q1 }}">
						</div>
						<div class="col-8">
							<label for="description">DESCRIÇÃO DOS SERVIÇOS</label>
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d1" name="d1" type="text" value="{{ $orders->d1 }}">
						</div>
						<div class="col-2">
							<label for="description">R$ UNT.</label>
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v1" name="v1" type="text" value="{{ $orders->v1 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q2" name="q2" type="text" value="{{ $orders->q2 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" id="d2" name="d2" type="text" value="{{ $orders->d2 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v2" name="v2" type="text" value="{{ $orders->v2 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q3" name="q3" type="text" value="{{ $orders->q3 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" id="d3" name="d3" type="text" value="{{ $orders->d3 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v3" name="v3" type="text" value="{{ $orders->v3 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q4" name="q4" type="text" value="{{ $orders->q4 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" id="d4" name="d4" type="text" value="{{ $orders->d4 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v4" name="v4" type="text" value="{{ $orders->v4 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q5" name="q5" type="text" value="{{ $orders->q5 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d5" name="d5" type="text" value="{{ $orders->d5 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v5" name="v5" type="text" value="{{ $orders->v5 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q6" name="q6" type="text" value="{{ $orders->q6 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d6" name="d6" type="text" value="{{ $orders->d6 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v6" name="v6" type="text" value="{{ $orders->v6 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q7" name="q7" type="text" value="{{ $orders->q7 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d7" name="d7" type="text" value="{{ $orders->d7 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v7" name="v7" type="text" value="{{ $orders->v7 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q8" name="q8" type="text" value="{{ $orders->q8 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d8" name="d8" type="text" value="{{ $orders->d8 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v8" name="v8" type="text" value="{{ $orders->v8 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q9" name="q9" type="text" value="{{ $orders->q9 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d9" name="d9" type="text" value="{{ $orders->d9 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v9" name="v9" type="text" value="{{ $orders->v9 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q10" name="q10" type="text" value="{{ $orders->q10 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d10" name="d10" type="text" value="{{ $orders->d10 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v10" name="v10" type="text" value="{{ $orders->v10 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q11" name="q11" type="text" value="{{ $orders->q11 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d11" name="d11" type="text" value="{{ $orders->d11 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v11" name="v11" type="text" value="{{ $orders->v11 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q12" name="q12" type="text" value="{{ $orders->q12 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d12" name="d12" type="text" value="{{ $orders->d12 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v12" name="v12" type="text" value="{{ $orders->v12 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q13" name="q13" type="text" value="{{ $orders->q13 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d13" name="d13" type="text" value="{{ $orders->d13 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v13" name="v13" type="text" value="{{ $orders->v13 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q14" name="q14" type="text" value="{{ $orders->q14 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="d14" name="d14" type="text" value="{{ $orders->d14 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white bg-dark-mode border-dark" id="v14" name="v14" type="text" value="{{ $orders->v14 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q15" name="q15" type="text" value="{{ $orders->q15 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d15" name="d15" type="text" value="{{ $orders->d15 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v15" name="v15" type="text" value="{{ $orders->v15 }}">
						</div>
					</div>
					<!-- **...FIM DA DESCRIÇÃO DOS SERVIÇOS...**  --->
				</div>
				<!-- FIM DA PRIMEIRA PARTE  --->


				<!-- SEGUNDA PARTE  --->
				<div class="col-md-5">

					<div class="form-group mb-3">
						<label for="obs">OBSERVAÇÃO</label>
						<input class="form-control text-white bg-dark-mode border-dark text-uppercase" type="text" name="obs" value="{{ $orders->obs }}">
					</div>

				<div class="form-row mb-3">
				    
					<div class="col">
						<label for="valor_entrada">VALOR DA ENTRADA</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text bg-dark text-white border-dark" id="valor_entrada">R$</span>
							</div>
							<input type="text" class="form-control text-white text-uppercase bg-dark-mode border-dark" name="valor_entrada" value="{{ $orders->valor_entrada }}">
							<div class="invalid-feedback">Valor da Entrada</div>	
						</div>
					</div>
					<div class="col">
						<label for="valor_labor">MÃO DE OBRA</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text bg-dark text-white border-dark" id="valor_labor">R$</span>
							</div>
							<input type="text" class="form-control text-white text-uppercase bg-dark-mode border-dark" name="valor_labor" value="{{ $orders->valor_labor }}">
							<div class="invalid-feedback">Valor da Mão de Obra</div>
						</div>
					</div>

					<div class="col">
						<label for="valor_total strong">VALOR TOTAL</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text bg-dark text-white border-dark" id="valor_total">R$</span>
							</div>
							<input type="text" class="form-control text-white text-uppercase bg-dark-mode border-dark" name="valor_total" value="{{ $orders->valor_total }}">
							<div class="invalid-feedback">Valor Total</div>
						</div>
					</div>
					
				</div>

				<hr class="hr text-white mt-0" />

				<div class="form-group">
					<label for="reeducando">REEDUCANDO RESPONSÁVEL</label>
					<select class="custom-select text-white bg-dark-mode border-dark" name="reeducando" id="reeducando">
						<option>{{ $orders->reeducando }}</option>
						@foreach($reeducandos as $reeducando)
						@if (($reeducando->paid)=="SIM") 
						<option>{{$reeducando->nome}}</option>
						@else @endif
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="categoria">OFICINA</label>
					<select class="custom-select text-white bg-dark-mode border-dark" name="categoria">
						<option>{{$orders->categoria}}</option>
						@foreach($categorias as $categoria)
						<option>{{$categoria->nome}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="responsavel">RESPONSÁVEL PELO PROJETO</label>
					<select class="custom-select text-white bg-dark-mode border-dark" name="responsavel">
						<option>{{ $orders->responsavel }}</option>
						@foreach($responsible as $responsavel)
						<option>{{$responsavel->nome}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group btn btn-primary btn-icon-split">
					<span class="icon text-white-50"><i class="fas fa-save"></i></span>
					<button type="submit" class="btn btn-primary">SALVAR</button>
				</div>

				<div class="form-group btn btn-success btn-icon-split">
					<span class="icon text-white-50"><i class="fas fa-undo-alt"></i></span>
					<a href="{{ url('order') }}" class="btn btn-success">CANCELAR</a>
				</div>
				
				<div class="dropdown-divider"></div>
				
			</div>
		</div>
	</form>
</div>
</div>

@endsection
