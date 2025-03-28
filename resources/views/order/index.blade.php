@extends('layouts.web')

@section('title', 'Ordens de Serviços')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-primary">ORDENS DE SERVIÇOS</h1>
	<a href="{{ url('order/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i class="fas fa-upload fa-sm text-white-50"></i> NOVA OS</a>
</div>

<i class="fas fa-file-import"></i> ULTIMAS <strong>ORDENS DE SERVIÇO</strong> LANÇADAS:

<div class="table-responsive">
	<table class="table table-dark table-hover bg-dark-mode text-gray-500">

<!-- -->
	<tfoot class="thead-dark">
		<tr>
		<th>OS</th>
		<th>Data</th>
		<th>Nome/Departamento</th>
		<th>Veículo</th>
		<th>Oficina</th>
		<th>Valor</th>
		<th></th>
		</tr>
	</tfoot>

		<tbody>
			@foreach ( $service as $order )
			<tr class="small">
				<td class="text-uppercase font-weight-bold">{{ $order->id }}</td>
				<td class="text-uppercase">{{date("d/m/Y", strtotime($order->data_entrada))}}</td>
				<td class="text-uppercase">
					<p class="text-sm font-weight-bold mb-0">{{ $order->cliente }}</p>
					<p class="text-xm text-secondary mb-0">{{ $order->contato }}</p>
				</td>
				<td class="text-uppercase">
					<p class="text-sm font-weight-bold mb-0">{{ $order->veiculo }}
						@if (($order->placa)>0) <span class="text-xm fw-normal mb-0"> - {{ $order->ano }}</span> @else @endif
					</p>
					<p class="text-xm text-secondary mb-0">{{ $order->placa }} <span class="text-xm font-weight-bold mb-0">{{ $order->cor }}</span></p>
				</td>
				<td class="text-uppercase">
					<p class="text-sm font-weight-bold mb-0">{{ $order->categoria }}</p>
					<p class="text-xm text-secondary mb-0">{{ $order->d1 }}</p>
				</td>
				<td class="text-uppercase">
					<p class="text-sm font-weight-bold mb-0">
						@if (($order->valor_total)=='00,00') {{ $order->tipo }} 
						@else R$ {{ $order->valor_total }} @endif
					</span></p>

					<p class="text-xm text-secondary mb-0">{{ $order->payment }}</p>
				</td>
				<td class="text-center">
					<div class="btn-group" role="group" aria-label="...">
						<!-- Editar -->
						<a href="order/{{ $order->id }}/edit" type="button" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="left" title="Editar" target="_blanck"><i class="fas fa-edit"> </i></a>
						<!-- Imprimir -->
						<a href="{{ route('order.show', $order->id) }}" class="btn btn-primary btn-circle btn-sm" target="_blanck" title="Imprimir"><i class="fas fa-print"></i></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>

<!-- Divider 
<div class="dropdown-divider"></div>-->

<!-- DataTales Example -->
<div class="table-responsive">
	<table class="table table-dark table-hover bg-dark-mode text-gray-500" id="dataTable" width="100%" cellspacing="0">

		<thead class="thead-dark">
			<tr>
				<th>OS</th>
				<th>Data</th>
				<th>Nome/Departamento</th>
				<th>Veículo/Objeto</th>
				<th>Oficina</th>
				<th>Valor</th>
				<th></th>

			</tr>
		</thead>

		<tfoot class="thead-dark">
			<tr>
				<th>OS</th>
				<th>Data</th>
				<th>Nome/Departamento</th>
				<th>Veículo</th>
				<th>Oficina</th>
				<th>Valor</th>
				<th></th>

			</tr>
		</tfoot>

		<tbody>

			@foreach ( $orders as $order )

			<tr class="small">
				<td class="text-uppercase font-weight-bold">{{ $order->id }}</td>
				<td class="text-uppercase">{{date("d/m/Y", strtotime($order->data_entrada))}}</td>
				<td class="text-uppercase">
					<p class="text-sm font-weight-bold mb-0">{{ $order->cliente }}</p>
					<p class="text-sm text-secondary mb-0">{{ $order->contato }}</p>
				</td>
				<td class="text-uppercase">
					<p class="text-sm font-weight-bold mb-0">{{ $order->veiculo }}
						@if (($order->placa)>0) <span class="text-xm fw-normal mb-0"> - {{ $order->ano }}</span> @else @endif
					</p>
					<p class="text-xm text-secondary mb-0">{{ $order->placa }} <i class="text-xm font-weight-bold mb-0">{{ $order->cor }}</i></p> 
				</td>
				<td class="text-uppercase">
					<p class="text-sm font-weight-bold mb-0">{{ $order->categoria }}</p>
					<p class="text-xm text-secondary mb-0">{{ $order->d1 }}</p>
				</td>
				<td class="text-uppercase">
					<p class="text-sm font-weight-bold mb-0">
						@if (($order->valor_total)=='00,00') <span class="text-danger">{{ $order->tipo }}</span> 
						@else R$ {{ $order->valor_total }} @endif
					</p>

					<p class="text-xm text-secondary mb-0">{{ $order->payment }}</p>
				</td>
				<td class="text-center">
					<div class="btn-group" role="group" aria-label="...">
						<!-- Editar -->
						<a href="order/{{ $order->id }}/edit" type="button" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="left" title="Editar" target="_blanck"><i class="fas fa-edit"> </i></a>
						<!-- Imprimir -->
						<a href="{{ route('order.show', $order->id) }}" class="btn btn-primary btn-circle btn-sm" target="_blanck" title="Imprimir"><i class="fas fa-print"></i></a>
					</div>
				</td>
			</tr>

			@endforeach

		</tbody>
	</table>
</div>


@endsection
