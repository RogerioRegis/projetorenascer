@extends('layouts.form')

@section('title', 'Nova OS')

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4 bg-dark-mode border-dark">

	<div class="card-header py-3 bg-dark-menu border-dark">
		<h5 class="m-0 font-weight-bold text-gray-500"><i class="fas fa-fw fa-table"></i> CRIANDO ORDEM DE SERVIÇO</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-600 font-weight-bold">

		<form id="create_form" method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data">
			@method('POST')
			@csrf

			<div class="row">
				<!-- COMEÇO DA PRIMEIRA PARTE  --->
				<div class="col-md-7">
					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group text-gray-600">
								<label for="data_entrada">ENTRADA</label>
								<input name="data_entrada" type="date" class="form-control text-white bg-dark-mode border border-dark">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group text-gray-600">
								<label for="data_saida">SAÍDA</label>
								<input name="data_saida" type="date" class="form-control text-white bg-dark-mode border border-dark">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group text-gray-600">
								<label for="tipo">TIPO</label>
								<select name="tipo" type="text" class="custom-select text-white bg-dark-mode border border-dark">
									<option>PARTICULAR</option>
									<option>CONVÊNIO</option>
								</select>
							</div>
						</div>
					</div>

					<hr class="hr text-white mt-0" />

					<div class="form-row">
						<div class="col-md-4">
							<div class="form-group text-gray-600">
								<label for="cliente">NOME/SECRETARIA</label>
								<input name="cliente" type="text" class="form-control text-white text-uppercase bg-dark-mode border-dark" placeholder="NOME E SOBRENOME">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group text-gray-600"><label for="cpf">CPF/CNPJ</label>
								<input class="form-control text-white bg-dark-mode border-dark" name="cpf" type="text" id="cpf" value="{{old('cpf')}}" placeholder="***.***.***-**">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group text-gray-600"><label for="contato">CONTATO</label>
								<input class="form-control text-white bg-dark-mode border-dark" name="contato" type="text" id="fone" value="{{old('contato')}}" placeholder="(**)****-****)">
							</div>
						</div>
					</div>


					<div class="form-row">
						<div class="col-md-3">
							<div class="form-group text-gray-600"><label for="veiculo">VEÍCULO/OBJETO</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="veiculo" type="text" placeholder="Veículo">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group text-gray-600"><label for="placa">PLACA</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" type="text" name="placa" id="placa" value="{{old('placa')}}" placeholder="***-****">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group text-gray-600"><label for="cor">COR</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="cor" type="text" placeholder="Cor">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group text-gray-600"><label for="ano">ANO</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="ano" type="text" placeholder="Ano">
							</div>
						</div>
					</div>

					<hr class="hr text-white mt-0" />

					<!-- **...COMEÇO DA DESCRIÇÃO DOS SERVIÇOS...**  --->
					<div class="form-row">
						<div class="col-2 text-gray-600">
							<label for="description">QUANT.</label>
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q1" name="q1" type="text" placeholder="QTD1">
						</div>
						<div class="col-8 text-gray-600">
							<label for="description">DESCRIÇÃO DOS SERVIÇOS</label>
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="d1" name="d1" type="text" placeholder="CAMPO 1">
						</div>
						<div class="col-2 text-gray-600">
							<label for="description">R$ UNT.</label>
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v1" name="v1" type="text" placeholder="VLR1">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q2" name="q2" type="text" placeholder="QTD2"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="d2" name="d2" type="text" placeholder="CAMPO 2">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v2" name="v2" type="text" placeholder="VLR2">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q3" name="q3" type="text" placeholder="QTD3"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d3" name="d3" type="text" placeholder="CAMPO 3">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v3" name="v3" type="text" placeholder="VLR3">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q4" name="q4" type="text" placeholder="QTD4"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d4" name="d4" type="text" placeholder="CAMPO 4">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v4" name="v4" type="text" placeholder="VLR4">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q5" name="q5" type="text" placeholder="QTD5"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d5" name="d5" type="text" placeholder="CAMPO 5">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v5" name="v5" type="text" placeholder="VLR5">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q6" name="q6" type="text" placeholder="QTD6"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d6" name="d6" type="text" placeholder="CAMPO 6">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v6" name="v6" type="text" placeholder="VLR6">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q7" name="q7" type="text" placeholder="QTD7"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d7" name="d7" type="text" placeholder="CAMPO 7">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v7" name="v7" type="text" placeholder="VLR7">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q8" name="q8" type="text" placeholder="QTD8"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d8" name="d8" type="text" placeholder="CAMPO 8">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v8" name="v8" type="text" placeholder="VLR8">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q9" name="q9" type="text" placeholder="QTD9"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d9" name="d9" type="text" placeholder="CAMPO 9">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v9" name="v9" type="text" placeholder="VLR9">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q10" name="q10" type="text" placeholder="QTD10"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d10" name="d10" type="text" placeholder="CAMPO 10">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v10" name="v10" type="text" placeholder="VLR10">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q11" name="q11" type="text" placeholder="QTD11"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d11" name="d11" type="text" placeholder="CAMPO 11">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v11" name="v11" type="text" placeholder="VLR11">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q12" name="q12" type="text" placeholder="QTD12"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d12" name="d12" type="text" placeholder="CAMPO 12">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v12" name="v12" type="text" placeholder="VLR12">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q13" name="q13" type="text" placeholder="QTD13"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d13" name="d13" type="text" placeholder="CAMPO 13">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v13" name="v13" type="text" placeholder="VLR13">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q14" name="q14" type="text" placeholder="QTD14"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d14" name="d14" type="text" placeholder="CAMPO 14">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark" id="v14" name="v14" type="text" placeholder="VLR14">
						</div>
					</div>
					<!-- **...FIM DA DESCRIÇÃO DOS SERVIÇOS...**  --->
				</div>
				<!-- FIM DA PRIMEIRA PARTE  --->


				<!-- SEGUNDA PARTE  --->
				<div class="col-md-5">

					<div class="form-group mb-4 text-gray-600">
						<label for="obs">OBSERVAÇÃO</label>
						<input type="form-row" name="obs" class="form-control text-white text-uppercase bg-dark-mode border-dark" placeholder="OBS">
					</div>
					<div class="form-row">
						<div class="col-md-4 mb-2 text-gray-600">
							<label for="valor_total strong">VALOR TOTAL</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text bg-dark text-white border-dark" id="valor_total">R$</span>
								</div>
								<input name="valor_total" type="text" class="form-control text-white bg-dark-mode border-dark" placeholder="00,00" required="">
								<div class="invalid-feedback">Valor Total</div>
							</div>
						</div>
						<div class="col-md-4 mb-2 text-gray-600">
							<label for="valor_estimado">ECÔNOMIA EST.</label>
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text bg-dark text-white border-dark" id="valor_estimado">R$</span>
								</div>
								<input name="valor_estimado" type="text" class="form-control text-white bg-dark-mode border-dark" placeholder="00,00" aria-describedby="valor_estimado">
								<div class="invalid-feedback">Valor Estimado para o Estado</div>
							</div>
						</div>
						<div class="col-md-4 mb-2 text-gray-600">
							<label for="payment">PAGAMENTO</label>
							<select class="custom-select text-white bg-dark-mode border-dark" name="payment" id="payment">
								<option>PIX</option>
								<option>CARTÃO</option>
								<option>DINHEIRO</option>
							</select>
						</div>
					</div>

					<hr class="hr text-white mt-1" />

					<div class="form-group mb-3 text-gray-600">
						<label for="reeducando">REEDUCANDO RESPONSÁVEL</label>
						<select class="custom-select text-white bg-dark-mode border-dark" name="reeducando" id="reeducando">
							<option>Selecione...</option>
							@foreach($reeducandos as $reeducando)
							@if (($reeducando->paid)=="SIM") 
							<option>{{$reeducando->nome}}</option>
							@else @endif
							@endforeach
						</select>
					</div>

					<div class="form-group mb-3 text-gray-600">
						<label for="categoria">OFICINA</label>
						<select class="custom-select text-white bg-dark-mode border-dark" name="categoria">
							<option>Selecione...</option>
							@foreach($categorias as $categoria)
							<option>{{$categoria->nome}}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group mb-3 text-gray-600">
						<label for="responsavel">RESPONSÁVEL PELO PROJETO</label>
						<select class="custom-select text-white bg-dark-mode border-dark" name="responsavel">
							@foreach($responsible as $responsavel)
							<option>{{$responsavel->nome}}</option>
							@endforeach
						</select>
					</div>

				<!-- 
					<div class="form-group text-gray-600">
						<label for="file" class="text-strong">NOTA FISCAL</label>
						<input type="file" class="form-control text-white bg-dark-mode border-dark" name="file">
					</div>
				-->

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
