@extends('layouts.web')

@section('title', 'Anos')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h1 class="h3 mb-0 text-gray-800">RELATÓRIO POR ANO</h1>
	<a href="{{ route('year.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
		<i class="fas fa-calendar-plus fa-sm text-white-50"></i> NOVO ANO</a>
	</div>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover table-green" id="dataTable" width="100%" cellspacing="0">
					<thead class="thead-dark">
						<tr>
							<th>NOME</th>
							<th>ANO</th>
							<th>EDITAR</th>
							<th>EXCLUIR</th>
						</tr>
					</thead>

					<tfoot class="thead-dark">
						<tr>
							<th>NOME</th>
							<th>ANO</th>
							<th>EDITAR</th>
							<th>EXCLUIR</th>
						</tr>
					</tfoot>

					<tbody>

						@foreach ( $years as $year )

						<tr>
							<td>{{ $year->id }}</td>
							<td><a href="year/{{ $year->id }}">{{ $year->year }}</a></td>
							<td class="text-center">
								<a href="year/{{ $year->id }}/edit"><i class="fas fa-edit"></i> EDITAR</a>
							</td>
							<td class="text-center">
								<a href="{{ route('year.destroy', $year->id) }}"><i class="fas fa-trash text-denger"></i> EXCLUIR</a>
							</td>
						</tr>

						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection
