@extends('layouts.list')

@section('title') {{$reeducandos->nome}} @stop

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h1 class="h3 mb-0 text-gray-800">EDITAR DADOS DO REEDUCANDO</h1>
	<a href="{{ url('reeducandos') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-upload text-white-50"></i> VOLTAR A REEDUCANDO</a>
</div>

<nav class="nav nav-borders">
	<a class="nav-link active ms-0" href="{{url('reeducandos')}}/{{ $reeducandos->id }}/edit">Perfil</a>
	<a class="nav-link" href="{{url('reeducandos')}}/{{ $reeducandos->id }}">Frequência</a>
</nav>

<form method="post" action="{{ route('reeducandos.update', $reeducandos->id) }}" enctype="multipart/form-data">
	@method('PATCH')
	@csrf

	<hr class="mt-0 mb-4" />

	@if ($message = Session::get('success'))
	<div class="alert alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ $message }}</strong>
	</div>
	@endif

	@if (count($errors) > 0)
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Atenção!</strong> Dados atualizados com sucesso!
		<ul>
			@foreach ($errors->all() as $error)
			<li>Porem a imagem não foi atualizada.</li>
			@endforeach
		</ul>
	</div>
	@endif

	<div class="row">
		<div class="col-xl-4">
			<!-- Profile picture card-->
			<div class="card mb-4 mb-xl-0">
				<label class="card-header text-gray-800">Foto do Perfil</label>
				<div class="card-body text-center">
					<!-- Profile picture image-->

					<img class="img-account-profile mb-2" 
					src="{{url('images')}}/perfil_{{ $reeducandos->id }}.jpg" alt="" />

					<!-- Profile picture help block-->
					<div class="small font-italic text-muted mb-4">JPG ou PNG não maior que 5 MB</div>
					<div class="col-md-12">
						<label>Escolher imagem</label>
						<input type="file" name="image" class="form-control">
					</div>
					<!-- QR Code 
					<div class="mb-2">
						<img class="img-thumbnail" src="https://chart.googleapis.com/chart?cht=qr&chl={{url('valida')}}/{{$reeducandos->id}}&chs=125x125&chld=L|0" style="-webkit-transform:scale(0.9);-moz-transform-scale(0.9);">
					</div>
					-->
					
				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<!-- Account details card-->
			<div class="card mb-2">
				<div class="card-header text-gray-800">Detalhes do Reeducando</div>
				<div class="card-body">

					<!-- <form>-->
						<div class=" form-row mb-2">
							<!-- Form Group (ID)-->
							<div class="col-2">
								<label class="small mb-1" for="ide">ID</label>
								<input class="form-control text-primary" type="text" name="ide" 
								value="{{$reeducandos->ide}}" />
							</div>
							<!-- Form Group (Nome)-->
							<div class="col-md-7">
								<label class="small mb-1" for="nome">NOME COMPLETO</label>
								<input class="form-control text-primary" type="text" name="nome" 
								value="{{$reeducandos->nome}}" />
							</div>
							<div class="col-md-3">
								<label class="small mb-1" for="categoria">MÊS DE FREQUÊNCIA</label>
								<select class="custom-select text-primary" name="month">
									<option selected>{{$reeducandos->month}}</option>
									@foreach($months as $month)
									<option>{{$month->month}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<!-- Form Row-->
						<div class="form-row mb-2">
							<!-- Form Group (Local)-->
							<div class="col-4">
								<label class="small mb-1" for="local">LOCAL</label>
								<select class="custom-select text-primary" name="local">
									<option>{{$reeducandos->local}}</option>
									<option>GARAGEM DO GOVERNO</option>
									<option>SEJUC</option>
									<option>PAMC</option>
									<option>PMRR</option>
									<option>CPFBV</option>
									<option>CPMBV</option>
									<option>-----</option>
								</select>
							</div>
							<!-- Form Group (Oficina)-->
							<div class="col-md-4">
								<label class="small mb-1" for="categoria">OFICINA / SETOR</label>
								<select class="custom-select text-primary" name="categoria">
									<option selected>{{$reeducandos->categoria}}</option>
									@foreach($categorias as $categoria)
									<option>{{$categoria->nome}}</option>
									@endforeach
									<option>-----</option>
								</select>
							</div>
							<!-- Form Group (Data Entrada)-->
							<div class="col-md-4">
								<label class="small mb-1" for="data_entrada">DATA DE ENTRADA</label>
								<input class="form-control text-primary" name="data_entrada" type="date" 
								value="{{$reeducandos->data_entrada}}" />
							</div>
						</div>

						<!-- RG e CPF 
						<div class="form-row mb-2">
							<div class="col-md-6">
								<label class="small mb-1" for="rg">RG</label>
								<input class="form-control text-primary" name="rg" type="text" 
								value="{{$reeducandos->rg}}" />
							</div>
					
							<div class="col-md-6">
								<label class="small mb-1" for="cpf">CPF</label>
								<input class="form-control text-primary" name="cpf" type="text" 
								value="{{$reeducandos->cpf}}" />
							</div>
						</div>
						-->
						
						<!-- 
						<div class="form-row mb-2">
							<div class="col-md-6">
								<label class="small mb-1" for="email">E-MAIL DO FAMILIAR</label>
								<input class="form-control text-primary" name="email" type="email" 
								value="{{$reeducandos->email}}" />
							</div>
					
							<div class="col-md-6">
								<label for="cor" class="small mb-1" for="cor"><img class=" rounded-circle" src="{{url('img')}}/cor/{{$reeducandos->cor}}.jpg" alt="cor" height="15"/> COR DO CRACHÁ</label>
								<select class="custom-select text-primary" name="cor">
									<option>{{$reeducandos->cor}}</option>
									<option>VERMELHO</option>
									<option>VERDE</option>
									<option>AZUL-DOURADO</option>
									<option>AZUL</option>
								</select>
							</div>
						</div>
						-->
						
						<div class="form-row mb-2">
							<!-- Form Group (Nome do Mãe)-->
							<div class="col-md-6">
								<label class="small mb-1" for="mae">NOME DA MÃE</label>
								<input class="form-control text-primary" type="text" name="mae"value="{{$reeducandos->mae}}" />
							</div>
							<!-- Form Group (Nome da Pai)-->
							<div class="col-md-6">
								<label class="small mb-1" for="pai">NOME DO PAI</label>
								<input class="form-control text-primary" type="text" name="pai" value="{{$reeducandos->pai}}" />
							</div>
						</div>
						<!--
						<div class="form-row mb-2">
							 
							<div class="col-md-4">
								<label class="small mb-1" for="telefone">TELEFONE DO FAMILIAR</label>
								<input class="form-control text-primary" name="telefone" type="tel" value="{{$reeducandos->telefone}}" />
							</div>
					
							<div class="col-md-4">
								<label class="small mb-1" for="birthday">DATA DE NASCIMENTO</label>
								<input class="form-control text-primary" type="date" name="birthday" value="{{$reeducandos->birthday}}" />
							</div>
						
							<div class="col-md-4">
								<label class="small mb-1" for="paid">REMUNERADO</label>
								<select class="custom-select text-primary" name="paid">
									<option selected>{{$reeducandos->paid}}</option>
									<option>SIM</option>
									<option>NÃO</option>
								</select>
							</div>
						</div>
						-->

						<a href="{{url('reeducandos')}}" class="btn btn-secondary">
							<i class="fa fa-reply"></i> Cancelar
						</a>
						<button type="submit" class="btn btn-success fa-2x">
							ATUALIZAR <i class="fa fa-save"></i> 
						</button>  
					</form>
				</div>
			</div>
			
		</div>
	</div>







	@endsection