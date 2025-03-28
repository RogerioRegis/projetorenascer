@extends('layouts.form')

@section('title') {{$reeducandos->nome}} @stop

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h1 class="h3 mb-0 text-gray-800">EDITAR DADOS DO REEDUCANDO</h1>
	<a href="{{ url('reeducating') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
		<i class="fas fa-upload text-white-50"></i> VOLTAR A REEDUCANDO</a>
</div>

<nav class="nav nav-borders">
	<a class="nav-link active ms-0" href="{{url('reeducating')}}/{{ $reeducandos->id }}/edit">Perfil</a>
	<a class="nav-link" href="{{ route('reeducating.show', $reeducandos->id) }}">Ganhos</a>
	<a class="nav-link" href="{{url('valida')}}/{{ $reeducandos->id }}" target="_blank">Validador</a>
	<a class="nav-link" href="{{url('reeducandos')}}/{{ $reeducandos->id }}" target="_blanck">Frequência</a>
</nav>

<form method="post" action="{{ route('reeducating.update', $reeducandos->id) }}" enctype="multipart/form-data">
	@method('PATCH')
	@csrf

	<hr class="mt-0 mb-4" />

	@if ($message = Session::get('success'))
	<div class="alert alert-dismissible alert-success alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ $message }}</strong>
	</div>
	@endif
	
	@if (count($errors) > 0)
	<div class="alert alert-dismissible alert-danger">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>Atenção!</strong> Dados atualizados com sucesso!
		<ul>
			@foreach ($errors->all() as $error)
			<li class="strong">Porem a imagem não foi atualizada.</li>
			@endforeach
		</ul>
	</div>
	@endif

	<div class="row">
		<div class="col-xl-4">
			<!-- Profile picture card-->
			<div class="card mb-4 mb-xl-0 bg-dark-mode border-dark">
				<label class="card-header text-white bg-gray-900">Foto do Perfil</label>
				<div class="card-body text-center">
					<!-- Profile picture image-->

					<img class="img-account-profile rounded-circle mb-2" 
					src="{{url('images')}}/perfil_{{ $reeducandos->id }}.jpg" alt="" width="250" height="250" />

					<!-- Profile picture help block-->
					<div class="small font-italic text-muted mb-4">JPG ou PNG não maior que 5 MB</div>
					<div class="col-md-12">
						<label>Escolher imagem</label>
						<input type="file" name="image" class="form-control bg-dark-mode">
					</div>

					<hr class="hr text-white mb-4" />
					
					<div class="mb-2">
						<img class="img-thumbnail" src="https://api.qrserver.com/v1/create-qr-code/?size=125x125&data={{url('valida')}}/{{$reeducandos->id}}">
					</div>
					
				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<!-- Account details card-->
			<div class="card mb-2 bg-dark-mode border-dark">
				<div class="card-header bg-dark-mode text-white">Detalhes do Reeducando</div>
				<div class="card-body">

					<!-- <form>-->
						<div class=" form-row mb-2">
							<!-- Form Group (Nome)-->
							<div class="col-md-2">
								<label class="small mb-1" for="nome">ID</label>
								<input class="form-control text-white bg-dark-mode border border-dark" type="text" name="ide" value="{{$reeducandos->ide}}" />
							</div>
							<!-- Form Group (Nome)-->
							<div class="col-md-6">
								<label class="small mb-1" for="nome">NOME COMPLETO</label>
								<input class="form-control text-white bg-dark-mode border border-dark" type="text" name="nome" value="{{$reeducandos->nome}}" />
							</div>
							<!-- Form Group (Função)-->
							<div class="col-md-4">
								<label class="small mb-1" for="function">FUNÇÃO</label>
								<input class="form-control text-white bg-dark-mode border border-dark" type="text" name="function" value="{{$reeducandos->function}}" />
							</div>
						</div>
						<!-- Form Row-->
						<div class="form-row mb-2">
							<!-- Form Group (Local)-->
							<div class="col-4">
								<label class="small mb-1" for="local">LOCAL</label>
								<select class="custom-select text-white bg-dark-mode border border-dark" name="local">
									<option>{{$reeducandos->local}}</option>
									<option>GARAGEM DO GOVERNO</option>
									<option>SEJUC</option>
									<option>PAMC</option>
									<option>PMRR</option>
									<option>CPFBV</option>
									<option>-------</option>
								</select>
							</div>
							<!-- Form Group (Oficina)-->
							<div class="col-md-4">
								<label class="small mb-1" for="categoria">OFICINA</label>
								<select class="custom-select text-white bg-dark-mode border border-dark" name="categoria">
									<option selected>{{$reeducandos->categoria}}</option>
									@foreach($categorias as $categoria)
									<option>{{$categoria->nome}}</option>
									@endforeach
									<option>-------</option>
								</select>
							</div>
							<!-- Form Group (Data Entrada)-->
							<div class="col-md-4">
								<label class="small mb-1" for="data_entrada">DATA DE ENTRADA</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="data_entrada" type="date" 
								value="{{$reeducandos->data_entrada}}" />
							</div>
						</div>

						<!-- RG e CPF -->
						<div class="form-row mb-2">
							<!-- Form Group (organization name)-->
							<div class="col-md-6">
								<label class="small mb-1" for="rg">RG</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="rg" type="text" 
								value="{{$reeducandos->rg}}" />
							</div>
							<!-- Form Group (location)-->
							<div class="col-md-6">
								<label class="small mb-1" for="cpf">CPF</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="cpf" type="text" 
								value="{{$reeducandos->cpf}}" />
							</div>
						</div>
						
						<!-- Form Group (email address)-->
						<div class="form-row mb-2">
							<!-- Form Group (Email)-->
							<div class="col-md-6">
								<label class="small mb-1" for="email">E-MAIL DO FAMILIAR</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="email" type="email" 
								value="{{$reeducandos->email}}" />
							</div>
							<!-- Form Group (Cor)-->
							<div class="col-md-6">

								<label for="cor" class="small mb-1" for="cor"><img class=" rounded-circle" src="{{url('img')}}/cor/{{$reeducandos->cor}}.jpg" alt="cor" height="15"/> COR DO CRACHÁ</label>
								<select class="custom-select text-white bg-dark-mode border border-dark" name="cor">
									<option>{{$reeducandos->cor}}</option>
									<option>VERMELHO</option>
									<option>VERDE</option>
									<option>AZUL-DOURADO</option>
									<option>AZUL</option>
								</select>

							</div>
						</div>
						
						<div class="form-row mb-2">
							<!-- Form Group (Nome do Mãe)-->
							<div class="col-md-6">
								<label class="small mb-1" for="mae">NOME DA MÃE</label>
								<input class="form-control text-white bg-dark-mode border border-dark" type="text" name="mae"value="{{$reeducandos->mae}}" />
							</div>
							<!-- Form Group (Nome da Pai)-->
							<div class="col-md-6">
								<label class="small mb-1" for="pai">NOME DO PAI</label>
								<input class="form-control text-white bg-dark-mode border border-dark" type="text" name="pai" value="{{$reeducandos->pai}}" />
							</div>
						</div>
						
						<div class="form-row mb-2">
							<!-- Form Group (phone number)-->
							<div class="col-md-4">
								<label class="small mb-1" for="telefone">TELEFONE DO FAMILIAR</label>
								<input class="form-control text-white bg-dark-mode border border-dark" name="telefone" type="tel" value="{{$reeducandos->telefone}}" />
							</div>
							<!-- Form Group (birthday)-->
							<div class="col-md-4">
								<label class="small mb-1" for="birthday">DATA DE NASCIMENTO</label>
								<input class="form-control text-white bg-dark-mode border border-dark" type="date" name="birthday" value="{{$reeducandos->birthday}}" />
							</div>
							<!-- Remunerado! -->
							<div class="col-md-4">
								<label class="small mb-1" for="paid">REMUNERADO</label>
								<select class="custom-select text-white bg-dark-mode border border-dark" name="paid">
									<option selected>{{$reeducandos->paid}}</option>
									<option>SIM</option>
									<option>NÃO</option>
								</select>
							</div>
							<!-- REGIME -->
							<div class="col-md-4">
								<label class="small mb-1" for="regime">REGIME</label>
								<select class="custom-select text-white bg-dark-mode border border-dark" name="regime">
									<option selected>{{$reeducandos->regime}}</option>
									<option>FECHADO</option>
									<option>SEMIABERTO</option>
								</select>
							</div>
							<!-- STATUS -->
							<div class="col-md-4">
								<label class="small mb-1" for="status">STATUS</label>
								<select class="custom-select text-white bg-dark-mode border border-dark" name="status">
									<option selected>{{$reeducandos->status}}</option>
									<option>ATIVO</option>
									<option>RESERVA</option>
								</select>
							</div>
							
							<!-- DELETAR -->
							<div class="col-md-4">
								<label class="small mb-1">DELETAR</label><br>
								
								<a href="#" data-toggle="modal" data-target="#exampleModal{{$reeducandos->id}}" class="btn btn-light btn-icon-split">
                                    <span class="icon text-gray-600 text-white bg-dark-menu"><i class="fas fa-trash text-dark"></i></span>
                                    <span class="text text-white bg-dark-mode">EXCLUIR</span>
                                </a>
								
							</div>
						</div>

						<a href="{{url('reeducating')}}" class="btn btn-secondary ">
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



	<!-- Modal* -->

	<div class="modal" id="exampleModal{{$reeducandos->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<img class="bd-placeholder-img flex-shrink-0 me-2 rounded-circle" src="{{url('images')}}/perfil_{{ $reeducandos->id }}.jpg" alt="Foto do Perfil" height="55" />
					<h5 class="modal-title" id="exampleModalLabel">{{ $reeducandos->nome }}</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">x</span>
					</button>
				</div>
				<div class="modal-body">
					Você deseja relamente Excluir definitivamente o Reeducando:
					<h5 class="modal-title font-weight-bold text-primary"> {{$reeducandos->nome}} ?</h5>  
					<!-- ATUALIZAR -->

					<div class="modal-footer">
						<form action="{{ route('reeducandos.destroy', $reeducandos->id) }}" method="POST">
							@method('DELETE') @csrf
							<button type="button" class="btn btn-secondary btn-icon-split mb-1"data-dismiss="modal">
								<span class="icon text-white-50"><i class="fas fa-times"></i></span>
								<span class="text">CANCELAR</span>
							</button>
							<button type="submit" class="btn btn-danger btn-icon-split mb-1">
								<span class="icon text-white-50"><i class="fas fa-trash"></i></span>
								<span class="text">DELETAR</span>
							</button>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- *Fim Modal -->

	@endsection