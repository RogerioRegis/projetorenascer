@extends('layouts.web')

@section('title', 'Anos')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h1 class="h3 mb-0 text-gray-800">RELATÓRIO POR MÊS</h1>
	<a href="{{ route('year.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
		<i class="fas fa-user fa-sm text-white-50"></i> NOVO MÊS</a>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover table-green" id="dataTable" width="100%" cellspacing="0">
					<thead class="thead-dark">
						<tr>
							<th>ID</th>
							<th>MÊS</th>
							<th>EDITAR</th>
							<th></th>
						</tr>
					</thead>

					<tfoot class="thead-dark">
						<tr>
							<th>ID</th>
							<th>MÊS</th>
							<th>EDITAR</th>
							<th></th>
						</tr>
					</tfoot>

					<tbody>

						<tr>
							<td>{{ $years->id }}</td>
							<td><a href="year/{{ $years->id }}">{{ $years->year }}</a></td>
							<td class="text-center">
								<a href="year/{{ $years->id }}/edit"><i class="fas fa-edit"></i> EDITAR</a>
							</td>
							<td class="text-center">
								<a href="{{ route('year.destroy', $years->id) }}"><i class="fas fa-trash text-denger"></i> EXCLUIR</a>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection