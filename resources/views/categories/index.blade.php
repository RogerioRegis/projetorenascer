@extends('layouts.web')

@section('title', 'Reeducandos')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h1 class="h3 mb-0 text-gray-600">CATEGORIAS</h1>
	<a href="{{ route('categories.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i
		class="fas fa-user fa-sm text-white-50"></i> NOVA CATEGORIA</a>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4 bg-dark-mode border-dark">
		
		<div class="card-body text-gray-600 font-weight-bold">

			<div class="table-responsive">
				<table class="table table-dark table-hover bg-dark-mode text-gray-500" id="dataTable" width="100%" cellspacing="0">
					<thead class="thead-dark">
						<tr>
							<th class="text-center">ID</th>
							<th>NOME</th>
							<th class="text-center">EDITAR</th>
							<th class="text-center">EXCLUIR</th>
						</tr>
					</thead>

					<tfoot class="thead-dark">
						<tr>
							<th>ID</th>
							<th>NOME</th>
							<th class="text-center">EDITAR</th>
							<th class="text-center">EXCLUIR</th>
						</tr>
					</tfoot>

					<tbody>

						@foreach ( $categorias as $categoria )

						<tr>
							<td class="text-center">{{ $categoria->id }}</td>
							<td>{{ $categoria->nome }}</td>
							<td class="text-center">
								<a href="categories/{{ $categoria->id }}/edit" class="btn btn-success btn-icon-split btn-sm">
									<span class="icon text-white-50"><i class="fas fa-edit"></i></span>
									<span class="text">EDITAR</span>
								</a>
							</td>
							<td class="text-center">
								<a href="categories/{{ $categoria->id }}/edit" class="btn btn-danger btn-icon-split btn-sm">
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