@extends('layouts.perfil')

@section('title') Pesquisar por Reeducando @stop

@section('content')
<div class="text-center">
	<img class="img-fluid mt-3 mb-4 text-center" src="{{ url('img/logo_renascer_horizontal_b.svg') }}" width="250" />
</div>
<hr class="mt-0 mb-4 text-gray-200" />
<div class="row">
	<div class="col-xl-4">
	</div>
	<div class="col-xl-4">
		<!-- Account details card-->
		<div class="card mb-4">
			<div class="card-header text-gray-800 bg-gray-300 text-center">PESQUISAR POR REEDUCANDO</div>
			<div class="card-body">
				<form method="POST" action="{{ url('#') }}" role="search">
					@csrf

					<!-- Form Group (username)-->
					<div class="mb-3">
						<label class="small mb-1" for="inputUsername">NOME</label>
						<input class="form-control" type="text" placeholder="Entre como nome"/>
					</div>
					<!-- Form Row-->
					<div class="row gx-3 mb-3">
						<!-- Form Group (first name)-->
						<div class="col-md-6">
							<label class="small mb-1" for="inputFirstName">CÓDIGO DE USO</label>
							<input class="form-control" type="text" placeholder="Entre com o código"/>
						</div>
						<!-- Form Group (last name)-->
						<div class="col-md-6">
							<label class="small mb-1" for="inputLastName">NOME DA MÃE</label>
							<input class="form-control" type="text" placeholder="Nome da Mãe"/>
						</div>
					</div>
					<!-- Save changes button-->
					<div class="form-group btn btn-secondary btn-icon-split mt-2 mb-0">
						<span class="icon text-white-50"><i class="fas fa-search fa-sm"></i></span>
						<button type="submit" class="btn btn-secondary">PESQUISAR</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-xl-4">
	</div>
</div>

@endsection