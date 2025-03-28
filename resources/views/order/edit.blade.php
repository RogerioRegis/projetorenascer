@extends('layouts.form')

@section('title', 'Editar O.S.')

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4 bg-dark-mode border-dark">

	<div class="card-header py-3 bg-dark-menu border-dark">
		<h5 class="m-0 font-weight-bold text-warning"><i class="fas fa-edit"></i> EDITANDO ORDEM DE SERVIÇO</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-600 font-weight-bold">

		<form action="{{ route('order.update', $orders->id) }}" method="post" enctype="multipart/form-data">
			@method('PATCH')
			@csrf

			<div class="row">
				
				<!-- PRIMEIRA PARTE  --->
				<div class="col-md-7">

					@include('includes.alerts')

					<div class="form-row">
						<div class="col">
							<div class="form-group">
								<label for="data_entrada">ENTRADA</label>
								<input name="data_entrada" type="date" class="form-control text-white text-uppercase bg-dark-mode border-dark"
								value="{{ $orders->data_entrada }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="data_saida">SAÍDA</label>
								<input name="data_saida" type="date" class="form-control text-white text-uppercase bg-dark-mode border-dark"
								value="{{ $orders->data_saida }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="tipo">TIPO</label>
								<select class="custom-select text-white text-uppercase bg-dark-mode border-dark" name="tipo">
									<option>{{ $orders->tipo }}</option>
									<option>PARTICULAR</option>
									<option>CONVÊNIO</option>
								</select>
							</div>
						</div>
					</div>

					<hr class="hr text-white mt-0" />

					<div class="form-row">
						<div class="col-md-5">
							<div class="form-group">
								<label for="cliente">NOME/SECRETARIA</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="cliente" type="text"
								value="{{ $orders->cliente }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="cpf">CPF/CNPJ</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="cpf" type="text"
								value="{{ $orders->cpf }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="contato">CONTATO</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="contato" type="text"
								value="{{ $orders->contato }}">
							</div>
						</div>
					</div>


					<div class="form-row">
						<div class="col-4">
							<div class="form-group">
								<label for="veiculo">VEÍCULO/OBJETO</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="veiculo" type="text"
								value="{{ $orders->veiculo }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="placa">PLACA</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="placa" type="text" 
								value="{{ $orders->placa }}">
							</div>
						</div>
						<div class="col">
							<div class="form-group">
								<label for="cor">COR</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="cor" type="text" 
								value="{{ $orders->cor }}">
							</div>
						</div>
						<div class="col-2">
							<div class="form-group">
								<label for="ano">ANO</label>
								<input class="form-control text-white text-uppercase bg-dark-mode border-dark" name="ano" type="text" 
								value="{{ $orders->ano }}">
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
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v1" name="v1" type="text" value="{{ $orders->v1 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q2" name="q2" type="text" value="{{ $orders->q2 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d2" name="d2" type="text" value="{{ $orders->d2 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v2" name="v2" type="text" value="{{ $orders->v2 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q3" name="q3" type="text" value="{{ $orders->q3 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d3" name="d3" type="text" value="{{ $orders->d3 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v3" name="v3" type="text" value="{{ $orders->v3 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q4" name="q4" type="text" value="{{ $orders->q4 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d4" name="d4" type="text" value="{{ $orders->d4 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v4" name="v4" type="text" value="{{ $orders->v4 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q5" name="q5" type="text" value="{{ $orders->q5 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d5" name="d5" type="text" value="{{ $orders->d5 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v5" name="v5" type="text" value="{{ $orders->v5 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q6" name="q6" type="text" value="{{ $orders->q6 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d6" name="d6" type="text" value="{{ $orders->d6 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v6" name="v6" type="text" value="{{ $orders->v6 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q7" name="q7" type="text" value="{{ $orders->q7 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d7" name="d7" type="text" value="{{ $orders->d7 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v7" name="v7" type="text" value="{{ $orders->v7 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q8" name="q8" type="text" value="{{ $orders->q8 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d8" name="d8" type="text" value="{{ $orders->d8 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v8" name="v8" type="text" value="{{ $orders->v8 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q9" name="q9" type="text" value="{{ $orders->q9 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d9" name="d9" type="text" value="{{ $orders->d9 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v9" name="v9" type="text" value="{{ $orders->v9 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q10" name="q10" type="text" value="{{ $orders->q10 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d10" name="d10" type="text" value="{{ $orders->d10 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v10" name="v10" type="text" value="{{ $orders->v10 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q11" name="q11" type="text" value="{{ $orders->q11 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d11" name="d11" type="text" value="{{ $orders->d11 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v11" name="v11" type="text" value="{{ $orders->v11 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q12" name="q12" type="text" value="{{ $orders->q12 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d12" name="d12" type="text" value="{{ $orders->d12 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v12" name="v12" type="text" value="{{ $orders->v12 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q13" name="q13" type="text" value="{{ $orders->q13 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d13" name="d13" type="text" value="{{ $orders->d13 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v13" name="v13" type="text" value="{{ $orders->v13 }}">
						</div>
					</div>
					<div class="form-row">
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-center" id="q14" name="q14" type="text" value="{{ $orders->q14 }}"> 
						</div>
						<div class="col-8">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="d14" name="d14" type="text" value="{{ $orders->d14 }}">
						</div>
						<div class="col-2">
							<input class="form-control mb-1 text-white text-uppercase bg-dark-mode border-dark text-uppercase" id="v14" name="v14" type="text" value="{{ $orders->v14 }}">
						</div>
					</div>
					<!-- **...FIM DA DESCRIÇÃO DOS SERVIÇOS...**  --->
				</div>
				<!-- FIM DA PRIMEIRA PARTE  --->


				<!-- SEGUNDA PARTE  --->
				<div class="col-md-5">

				<div class="form-group">
					<label for="obs">OBSERVAÇÃO</label>
					<input class="form-control text-white text-uppercase bg-dark-mode border-dark" type="text" name="obs" value="{{ $orders->obs }}">
				</div>

				<div class="form-row mb-3">
					<div class="col">
						<label for="valor_total strong">VALOR TOTAL</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text bg-dark text-white border-dark" id="valor_total">R$</span>
							</div>
							<input type="text" class="form-control text-white bg-dark-mode border-dark" name="valor_total"
							value="{{ $orders->valor_total }}">
							<div class="invalid-feedback">Valor Total</div>
						</div>
					</div>
					<div class="col">
						<label for="valor_estimado">ECÔNOMIA EST.</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text bg-dark text-white border-dark" id="valor_estimado">R$</span>
							</div>
							<input type="text" class="form-control text-white bg-dark-mode border-dark" name="valor_estimado"
							value="{{ $orders->valor_estimado }}">
							<div class="invalid-feedback">Valor Estimado para o Estado</div>
						</div>
					</div>
					<div class="col">
						<label for="payment">PAGAMENTO</label>
						<select class="custom-select text-white bg-dark-mode border-dark" name="payment" id="payment">
							<option>{{ $orders->payment }}</option>
							<option>PIX</option>
							<option>CARTÃO</option>
							<option>DINHEIRO</option>
						</select>
					</div>
				</div>

				<hr class="hr text-white mt-0" />

				<div class="form-group">
					<label for="reeducando">REEDUCANDO RESPONSÁVEL</label>
					<select class="custom-select my-1 mr-sm-2 mb-1 text-white text-uppercase bg-dark-mode border-dark" name="reeducando" id="reeducando">
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
					<select class="custom-select my-1 mr-sm-2 mb-1 text-white text-uppercase bg-dark-mode border-dark" name="categoria">
						<option>{{$orders->categoria}}</option>
						@foreach($categorias as $categoria)
						<option>{{$categoria->nome}}</option>
						@endforeach
					</select>
				</div>

				<div class="form-group">
					<label for="responsavel">RESPONSÁVEL PELO PROJETO</label>
					<select class="custom-select my-1 mr-sm-2 mb-1 text-white text-uppercase bg-dark-mode border-dark" name="responsavel">
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
				
				<hr class="hr text-white mt-0" />
				
				<h5 class="m-0 font-weight-bold text-secondary"> <i class="fas fa-divide"></i> DIVISÃO</h5>
	
				<!-- DIVISÃO DE VALORES --->
				<div class="form-row">
					<div class="col-9">							
					    <label for="ndiv1">REEDUCANDO</label>
					    <select class="form-control text-white bg-dark-mode border-dark text-uppercase" name="ndiv1">
						<option>{{ $orders->ndiv1 }}</option>
						<option value="">----</option>
						    @foreach($reeducandos as $reeducando)
						        @if (($reeducando->paid)=="SIM") 
						            <option>{{$reeducando->nome}}</option>
						        @else @endif
						    @endforeach
					    </select>
					</div>
					<div class="col-3">
						<label for="description">R$</label>
						<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="vdiv1" type="text" value="{{ $orders->vdiv1 }}">
					</div>
				</div>
				
				<div class="form-row">
					<div class="col-9">	
						<select class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="ndiv2">
						<option>{{ $orders->ndiv2 }}</option>
						<option value="">----</option>
						    @foreach($reeducandos as $reeducando)
						        @if (($reeducando->paid)=="SIM") 
						            <option>{{$reeducando->nome}}</option>
						        @else @endif
						    @endforeach
					    </select>
					</div>
					<div class="col-3">
						<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="vdiv2" type="text" value="{{ $orders->vdiv2 }}">
					</div>
				</div>
				
				<div class="form-row">
					<div class="col-9">							
						<select class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="ndiv3">
						<option>{{ $orders->ndiv3 }}</option>
						<option value="">----</option>
						    @foreach($reeducandos as $reeducando)
						        @if (($reeducando->paid)=="SIM") 
						            <option>{{$reeducando->nome}}</option>
						        @else @endif
						    @endforeach
					    </select>
					</div>
					<div class="col-3">
						<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="vdiv3" type="text" value="{{ $orders->vdiv3 }}">
					</div>
				</div>
				
				<div class="form-row">
					<div class="col-9">							
						<select class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="ndiv4">
						<option>{{ $orders->ndiv4 }}</option>
						<option value="">----</option>
						    @foreach($reeducandos as $reeducando)
						        @if (($reeducando->paid)=="SIM") 
						            <option>{{$reeducando->nome}}</option>
						        @else @endif
						    @endforeach
					    </select>
					</div>
					<div class="col-3">
						<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="vdiv4" type="text" value="{{ $orders->vdiv4 }}">
					</div>
				</div>
				
				<div class="form-row">
					<div class="col-9">							
						<select class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="ndiv5">
						<option>{{ $orders->ndiv5 }}</option>
						<option value="">----</option>
						    @foreach($reeducandos as $reeducando)
						        @if (($reeducando->paid)=="SIM") 
						            <option>{{$reeducando->nome}}</option>
						        @else @endif
						    @endforeach
					    </select>
					</div>
					<div class="col-3">
						<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="vdiv5" type="text" value="{{ $orders->vdiv5 }}">
					</div>
				</div>
				
				<div class="form-row">
					<div class="col-9">							
						<select class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="ndiv6">
						<option>{{ $orders->ndiv6 }}</option>
						<option value="">----</option>
						    @foreach($reeducandos as $reeducando)
						        @if (($reeducando->paid)=="SIM") 
						            <option>{{$reeducando->nome}}</option>
						        @else @endif
						    @endforeach
					    </select>
					</div>
					<div class="col-3">
						<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="vdiv6" type="text" value="{{ $orders->vdiv6 }}">
					</div>
				</div>
				
				<div class="form-row">
					<div class="col-9">							
						<select class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="ndiv7">
						<option>{{ $orders->ndiv7 }}</option>
						<option value="">----</option>
						    @foreach($reeducandos as $reeducando)
						        @if (($reeducando->paid)=="SIM") 
						            <option>{{$reeducando->nome}}</option>
						        @else @endif
						    @endforeach
					    </select>
					</div>
					<div class="col-3">
						<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="vdiv7" type="text" value="{{ $orders->vdiv7 }}">
					</div>
				</div>

				<div class="form-row">
					<div class="col-9">							
						<select class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="ndiv8">
						<option>{{ $orders->ndiv8 }}</option>
						<option value="">----</option>
						    @foreach($reeducandos as $reeducando)
						        @if (($reeducando->paid)=="SIM") 
						            <option>{{$reeducando->nome}}</option>
						        @else @endif
						    @endforeach
					    </select>
					</div>
					<div class="col-3">
						<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="vdiv8" type="text" value="{{ $orders->vdiv8 }}">
					</div>
				</div>

				<div class="form-row">
					<div class="col-9">							
						<select class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="ndiv9">
						<option>{{ $orders->ndiv9 }}</option>
						<option value="">----</option>
						    @foreach($reeducandos as $reeducando)
						        @if (($reeducando->paid)=="SIM") 
						            <option>{{$reeducando->nome}}</option>
						        @else @endif
						    @endforeach
					    </select>
					</div>
					<div class="col-3">
						<input class="form-control mb-1 text-white bg-dark-mode border-dark text-uppercase" name="vdiv9" type="text" value="{{ $orders->vdiv9 }}">
					</div>
				</div>

			</div>
		</div>
	</form>
</div>
</div>

@endsection
