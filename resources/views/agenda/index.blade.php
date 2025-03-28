@extends('layouts.web')

@section('title', 'Agendamento de Serviço')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 font-weight-bold text-danger">AGENDAMENTO / ORÇAMENTO</h1>
	<a href="{{ route('agenda.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
		<i class="fas fa-calendar-plus fa-sm text-white-50"></i> NOVO ORÇAMENTO</a>
	</div>
	
	<!-- DataTales Orçamentos -->
	<i class="fas fa-file-import"></i> ULTIMOS <strong>ORÇAMENTOS / AGENDAMENTOS</strong> REALIZADOS:

	<div class="table-responsive">
		<table class="table table-dark table-hover bg-dark-mode text-gray-500">
			
			<tfoot class="thead-dark">
				<tr>
					<th>#</th>
					<th>Cliente</th>
					<th>Obijeto / Veículo</th>
					<th>Itens</th>
					<th>Contato</th>
					<th>Categoria</th>
					<th></th>   
				</tr>
			</tfoot>

			<tbody>
				@foreach ( $budgets as $budget )
				<tr class="small">
					<td class="text-uppercase">
						<p class="text-sm font-weight-bold mb-0">{{ $budget->id }}</p>
						<p class="text-xm text-secondary mb-0">{{date("d/m/Y", strtotime($budget->data_entrada))}}</p>
					</td>
					<td class="text-uppercase">
						<p class="text-sm font-weight-bold mb-0">{{ $budget->cliente }}</p>
						<p class="text-xm text-secondary mb-0">{{ $budget->contato }}</p>
					</td>
					<td class="text-uppercase">{{ $budget->veiculo }}</td>
					<td class="text-uppercase">{{ $budget->d1 }}</td>
					<td class="text-uppercase font-weight-bold mb-0">R$ {{ $budget->valor_total }}</td>
					<td class="text-uppercase">{{ $budget->categoria }}</td>
					<td class="text-center">
						<div class="btn-group" role="group" aria-label="...">
							<!-- Editar -->
							<a href="{{url('agenda')}}/{{ $budget->id }}/edit" type="button" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="left" title="Editar" target="_blanck"><i class="fas fa-edit"> </i></a>
							
							<!-- Avulso -->
							<a href="{{ route('avulso.show', $budget->id) }}" class="btn btn-secondary btn-circle btn-sm" target="_blanck" title="Avulso"><i class="fas fa-receipt"></i></a>
							
							<!-- Imprimir -->
							<a href="{{ route('agenda.show', $budget->id) }}" class="btn btn-primary btn-circle btn-sm" target="_blanck" title="Imprimir"><i class="fas fa-print"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

	<!-- DataTales Example -->

	<div class="table-responsive">
		<table class="table table-dark table-hover bg-dark-mode text-gray-500 small" id="dataTable" width="100%" cellspacing="0">
			<thead class="thead-dark">
				<tr>
					<th>#ID</th>
					<th>CLIENTE</th>
					<th>VEÍCULO/OBJETO</th>
					<th>VALOR</th>
					<th>SERVIÇO</th>
					<th>SETOR</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ( $agendas as $agenda )
				<tr class="text-uppercase">
					<td class="text-uppercase">
						<p class="text-sm font-weight-bold mb-0">{{ $agenda->id }}</p>
					</td>
					<td>
						<p class="text-sm font-weight-bold mb-0">{{ $agenda->cliente }}</p>
						<p class="text-xm text-secondary mb-0">{{ $agenda->contato }}</p>
					</td>
					<td>
						<p class="text-sm font-weight-bold mb-0">{{ $agenda->veiculo }}</p>
						<p class="text-xm text-secondary mb-0">{{ $agenda->placa }} <span class="text-xm mb-0">{{ $agenda->cor }}</span></p>

					</td>
					<td>
						<p class="text-sm font-weight-bold mb-0">R$ {{ $agenda->valor_total }}</p>
						<p class="text-xm text-secondary mb-0">{{date("d/m/Y", strtotime($agenda->data_entrada))}}</p>
					</td>
					<td>{{ $agenda->d1 }}</td>

					<td>{{ $agenda->categoria }}</td>
					<td class="text-center">
						<div class="btn-group" role="group" aria-label="...">
							<!-- Editar -->
							<a href="{{url('agenda')}}/{{ $agenda->id }}/edit" type="button" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="left" title="Editar" target="_blanck"><i class="fas fa-edit"> </i></a>

							<!-- Avulso -->
							<a href="{{ route('avulso.show', $budget->id) }}" class="btn btn-secondary btn-circle btn-sm" target="_blanck" title="Avulso"><i class="fas fa-receipt"></i></a>

							<!-- Imprimir -->
							<a href="{{ route('agenda.show', $agenda->id) }}" class="btn btn-primary btn-circle btn-sm" target="_blanck" title="Imprimir"><i class="fas fa-print"></i></a>
						</div>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>


	@endsection