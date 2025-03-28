@extends('layouts.web')

@section('title', 'Responsável pelo Projeto')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h1 class="h3 mb-0 text-gray-800">RESPONSÁVEL PELO PROJETO</h1>
	<a href="{{ route('responsible.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
		<i class="fas fa-user fa-sm text-white-50"></i> NOVO RESPONSÁVEL</a>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover table-green" id="dataTable" width="100%" cellspacing="0">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>NOME</th>
							<th>CARGO</th>
							<th class="text-center">EDITAR</th>
							<th class="text-center">EXCLUIR</th>
						</tr>
					</thead>

					<tfoot class="thead-dark">
						<tr>
							<th>ID</th>
							<th>NOME</th>
							<th>CARGO</th>
							<th class="text-center">EDITAR</th>
							<th class="text-center">EXCLUIR</th>
						</tr>
					</tfoot>

					<tbody>

						@foreach ( $responsible as $responsavel )

						<tr>
							<td>{{ $responsavel->id }}</td>
							<td>{{ $responsavel->nome }}</td>
							<td>{{ $responsavel->cargo }}</td>
							<td class="text-center">
								<a href="responsible/{{ $responsavel->id }}/edit" class="btn btn-success btn-icon-split btn-sm">
									<span class="icon text-white-50"><i class="fas fa-edit"></i></span>
									<span class="text">EDITAR</span>
								</a>
							</td>
							<td class="text-center">
								<a href="{{ route('responsible.destroy', $responsavel->id) }}" class="btn btn-danger btn-icon-split btn-sm">
									<span class="icon text-white-50"><i class="fas fa-trash"></i></span>
									<span class="text">EXCLUIR</span>
								</a>
							</td>
						</tr>

						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>

	@endsection