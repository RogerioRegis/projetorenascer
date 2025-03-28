@extends('layouts.web')

@section('title', 'Relatórios')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h4 class="h3 mb-0 text-primary">Relatórios Ano Calendário 2022</h4>
		<a href="{{ route('relatorio.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
			<i class="fas fa-file-invoice-dollar fa-sm text-white-50"></i> NOVO RELATÓRIO
		</a>
	</div>
	
<!-- DataTables  -->
		<div class="card shadow mb-4">
			<div class="card-body">
				<div class="table-responsive">
					<table class="table table-striped table-bordered table-hover table-green" id="dataTable" width="100%" cellspacing="0">

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

							@foreach ( $vinte_dois_orders as $order )

        					<tr class="small">
        						<td class="text-uppercase font-weight-bold">{{ $order->id }}</td>
        						<td class="text-uppercase">{{date("d/m/Y", strtotime($order->data_entrada))}}</td>
        						<td class="text-uppercase">
        							<p class="text-sm font-weight-bold mb-0">{{ $order->cliente }}</p>
        							<p class="text-sm text-secondary mb-0">{{ $order->contato }}</p>
        						</td>
        						<td class="text-uppercase">
        						    <p class="text-sm font-weight-bold mb-0">{{ $order->veiculo }}</p>
        					        <p class="text-xm text-secondary mb-0">{{ $order->placa }} <span class="text-xm font-weight-bold mb-0">{{ $order->cor }}</span></p> 
        						</td>
        						<td class="text-uppercase">
        						    <p class="text-sm font-weight-bold mb-0">{{ $order->categoria }}</p>
        				            <p class="text-xm text-secondary mb-0">{{ $order->d1 }}</p>
        						</td>
        						<td class="text-uppercase">{{ $order->valor_total }}</td>
        						<td class="text-center">
        							<div class="btn-group" role="group" aria-label="...">
        								<!-- Editar -->
        								<a href="order/{{ $order->id }}/edit" type="button" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="left" title="Editar" target="_blanck"><i class="fas fa-edit"> </i></a>
        								<!-- Imprimir -->
        								<a href="{{ url('order2022', $order->id) }}" class="btn btn-primary btn-circle btn-sm" target="_blanck" title="Imprimir"><i class="fas fa-print"></i></a>
        							</div>
        						</td>
        					</tr>

						@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>





</div>
<!-- /.container-fluid -->


@endsection
