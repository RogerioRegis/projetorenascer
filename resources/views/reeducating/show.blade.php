@extends('layouts.web')

@section('title') {{$reeducandos->nome}} @stop

@section('content')

	<script>
        $(document).ready(function() {
            $('table thead th').each(function(i) {
                calculateColumn(i);
            });
        });

        function calculateColumn(index) {
            var total = 0;
            $('table tr').each(function() {
                var value = parseInt($('td', this).eq(index).text());
                if (!isNaN(value)) {
                    total += value;
                }
            });
            $('table tfoot td').eq(index).text('Total: ' + total);
        }
    </script>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<p class="h4 mb-0 text-primary"><img class="rounded-circle" src="{{url('images')}}/perfil_{{ $reeducandos->id }}.jpg" alt="Foto do Perfil" height="55" /> <strong>{{ $reeducandos->nome }}</strong> - {{ $reeducandos->categoria }}</p> 
	<a href="{{ route('reeducating.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
		<i class="fa fa-arrow-left text-white-50"></i> VOLTAR A REEDUCANDOS</a>
	</div>

	<nav class="nav nav-borders">
		<a class="nav-link ms-0" href="{{url('reeducating')}}/{{ $reeducandos->id }}/edit">Editar Perfil</a>
		<a class="nav-link active" href="{{ route('reeducating.show', $reeducandos->id) }}">Serviços</a>
		<a class="nav-link" href="{{url('valida')}}/{{ $reeducandos->id }}" target="_blanck">Validador</a>
		<a class="nav-link" href="{{url('reeducandos')}}/{{ $reeducandos->id }}" target="_blanck">Frequência</a>
		
	</nav>

	<div class="row">

		<div class="col-xl-12">
			<!-- Account details card-->
			<div class="card mb-4">
				<div class="card-header text-gray-800">Relatório de Serviços</div>
				<div class="card-body">
					
					<div class="table-responsive">
						<table class="table table-small table-bordered table-hover table-green" id="dataTable">
							<thead class="thead-dark">
								<tr>
								    <th>ID</th>
									<th>Data</th>
									<th>Cliente/Secretaria</th>
									<th>Veículo/Objeto</th>
									<th>Placa</th>
									<th>Serviço</th>
									<th>Valor</th>
									<th></th>
								</tr>
							</thead>
							<tfoot class="thead-dark">
								<tr>
								    <th>ID</th>
									<th>Data</th>
									<th>Cliente/Secretaria</th>
									<th>Veículo/Objeto</th>
									<th>Placa</th>
									<th>Serviço</th>
									<th>Valor</th>
									<th></th>
								</tr>
							</tfoot>
							<tbody>

								@foreach ( $orders as $order )
								@if ("{{ $order->reeducando }}" == "{{ $reeducandos->nome }}")
								<tr class="small">
								    <td class="text-uppercase">{{ $order->id }}</td>
									<td class="text-uppercase">{{date("d/m/Y", strtotime($order->data_entrada))}}</td>
									<td class="text-uppercase">{{ $order->cliente }}</td>
									<td class="text-uppercase">{{ $order->veiculo }}</td>
									<td class="text-uppercase">{{ $order->placa }}</td>
									<td class="text-uppercase">{{ $order->d1 }}</td>
									@if (($order->valor_total) == "00,00")
									<td class="text-uppercase">{{ $order->valor_estimado }}</td>
							        @else 
									<td class="text-uppercase">{{ $order->valor_total }}</td>
									@endif
									
									<td class="text-center">
							        <div class="btn-group" role="group" aria-label="...">
								        <!-- Editar -->
								    <a href="{{route('order.edit', $order->id)}}" type="button" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="left" title="Editar" target="_blanck"><i class="fas fa-edit"> </i></a>
								        <!-- Imprimir -->
								    <a href="{{ route('order.show', $order->id) }}" class="btn btn-primary btn-circle btn-sm" target="_blanck" title="Imprimir"><i class="fas fa-print"></i></a>
							        </div>
						            </td>
									
								</tr>
								@else @endif
								@endforeach
							
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	@endsection