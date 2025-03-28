@extends('layouts.web')

@section('title', 'ImageUpload')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<div class="panel-heading"><h2>Upload de foto de perfil do Reeducando</h2></div>

	<a href="{{ route('reeducating.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
		<i class="fa fa-arrow-left text-white-50"></i> VOLTAR A REEDUCANDOS</a>
	</div>

	<hr class="mt-0 mb-4" />

	<div class="row">
		<div class="col-xl-4">
			<!-- Profile picture card-->
			@if ($message = Session::get('success'))
			<div class="alert alert-success alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>{{ $message }}</strong>
			</div>
			<div class="card mb-4 mb-xl-0">
				<div class="card-header text-gray-800">Foto do Perfil</div>
				<div class="card-body text-center">
					<!-- Profile picture image-->

					<img class="img-account-profile mb-2" src="images/{{ Session::get('image') }}">
					@endif

					@if (count($errors) > 0)
					<div class="alert alert-danger">
						<strong>Whoops!</strong> There were some problems with your input.
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif

				</div>
			</div>
		</div>
		<div class="col-xl-8">
			<!-- Account details card-->
			<div class="card mb-4">
				<div class="card-header text-gray-800">Carregar Imagem</div>
				<div class="card-body">

					<form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row">

							<div class="col-md-12">
								<label>Escolher imagem</label>
								<input type="file" name="image" class="form-control">
							</div>
							<div class="col-md-12 mt-3">
								<label for="nome">Vincular a um Reeducando</label>
								<select class="custom-select" name="nome">
									<option>Selecione...</option>
									@foreach($reeducandos as $reeducando)
									<option>{{$reeducando->nome}}</option>
									@endforeach
								</select>
							</div>

							<div class="col-md-12 mt-3">
								<div class="form-group">
									<a href="{{url('reeducating')}}" class="btn btn-secondary">
										<i class="fa fa-reply"></i> Cancelar</a>
										<button type="submit" class="btn btn-success fa-2x">
											Upload <i class="fa fa-upload"></i> 
										</button>  
									</div> 
								</div>



							</div>

						</form>


					</div>
				</div>
			</div>
		</div>

		@endsection