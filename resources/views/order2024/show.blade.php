@extends('layouts.web')

@section('title', 'Relatório')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h4 class="m-0 font-weight-bold text-uppercase"><i class="fas fa-file-invoice"></i> 
		ORDEM DE SERVIÇO nº: <span class="text-primary">{{$vinte_tres_orders->id}} </span>ANO: <span class="text-primary"> 2023</span>
	</h4>
</div>
<hr>

<div class="form-row">
	<div class="col-lg-12"> 
		<div class="card mb-4">
			<div class="card-header text-gray-800 text-center"><strong>DADOS DA ORDEM DE SERVIÇO</strong></div>
			<div class="card-body">
				<div class="form-row text-uppercase">
					<div class="col">
						<!-- Dados do Estudante -->
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">CLIENTE:</span> {{$vinte_tres_orders->cliente}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">CPF:</span> {{$vinte_tres_orders->cpf}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">CONTATO:</span> {{$vinte_tres_orders->contato}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">VEÍCULO / OBIJETO:</span> {{$vinte_tres_orders->q1}} - {{$vinte_tres_orders->veiculo}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">ANO:</span> {{$vinte_tres_orders->ano}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">PLACA:</span> {{$vinte_tres_orders->placa}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">COR:</span> {{$vinte_tres_orders->cor}}
						</div>  
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">SETOR:</span> {{$vinte_tres_orders->categoria}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">REEDUCANDO:</span> {{$vinte_tres_orders->reeducando}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">DATA:</span> {{date("d/m/Y", strtotime($vinte_tres_orders->data_saida))}}
						</div>
					</div>
					<!-- DESCRIÇÃO DOS SERVIÇOS --->
					<div class="col">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">DESCRIÇÃO DO SERVIÇO:</span> 
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->d1}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->d2}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->d3}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->d4}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->d5}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->d6}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->d7}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">OBS.:</span> {{$vinte_tres_orders->obs}}
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">VALOR:</span> R$ <strong>{{$vinte_tres_orders->valor_total}}</strong>
						</div>
					</div>
				</div>
			</div>
		</div> 
		
	    <div class="card mb-4">
			<div class="card-header text-gray-800 text-center"><strong>DIVISÃO</strong></div>
			<div class="card-body">
				<div class="form-row text-uppercase">
					<div class="col">
						<!-- Dados do Estudante -->
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">REEDUCANDOS:</span> 
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->ndiv1}}
						</div>
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->ndiv2}}
						</div>
						
					</div>
					<!-- DESCRIÇÃO DOS SERVIÇOS --->
					<div class="col">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">VALOR:</span> 
						</div>
						<hr class="mt-1 mb-1">
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->vdiv1}}
						</div>
						<div class="font-italic text-primary mb-1">
							<span class="font-italic text-muted mb-0">:</span> {{$vinte_tres_orders->vdiv2}}
						</div>
						
					</div>
				</div>
			</div>
		</div> 
		
		<div class="form-group pull-right">
			<a href="{{url('order2023')}}" class="btn btn-info mb-1"><i class="fa fa-reply"></i> VOLTAR</a>
		</div>
	</div>
</div>

@endsection
