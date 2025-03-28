@extends('layouts.web')

@section('title', 'LISTA DE CLIENTES')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">LISTA DE CLIENTES</h1>
	<a href="{{ url('clientes/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-user-plus fa-sm text-white-50"></i> NOVO CLIENTE</a>
</div>

<!-- DataTales Example -->

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-dark table-hover bg-dark-mode text-gray-500" id="dataTable" width="100%" cellspacing="0">
				<thead class="thead-dark">
					<tr>
						<th>NOME</th>
						<th>OBJETO</th>
						<th>CONTATO</th>
						<th>PLACA</th>
						<th>COR</th>
						<th>ANO</th>
						<th></th>

					</tr>
				</thead>

				<tbody>

					@foreach ( $clientes as $cliente )

					<tr class="small">
						<td class="text-uppercase">{{ $cliente->nome }}</td>
						<td class="text-uppercase">{{ $cliente->veiculo }}</td>
						<td class="text-uppercase">{{ $cliente->contato }}</td>
						<td class="text-uppercase">{{ $cliente->placa }}</td>
						<td class="text-uppercase">{{ $cliente->cor }}</td>
						<td class="text-uppercase">{{ $cliente->ano }}</td>

						<td class="text-center small">
							<div class="btn-group" role="group" aria-label="...">
								<!-- Editar -->
								<a href="clientes/{{ $cliente->id }}/edit" type="button" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="left" title="Editar" target="_blanck"><i class="fas fa-edit"> </i></a>
								<!-- Imprimir -->
								<a href="{{ route('clientes.show', $cliente->id) }}" class="btn btn-primary btn-circle btn-sm" target="_blanck" title="Imprimir"><i class="fas fa-print"></i></a>
							</div>
						</td>
					</tr>

					@endforeach

				</tbody>
			</table>
		</div>
	</div>

@endsection
