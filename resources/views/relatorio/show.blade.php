@extends('layouts.web')

@section('title', 'Relatório')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">
		Relatorio do mês {{ $relatorio->month }} de {{ $relatorio->year }}.
	</h1>
	<a href="{{ url('/relatorio/create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
		class="fas fa-download fa-sm text-white-50"></i> NOVA OS</a>
	</div>


	<div class="form-row text-xs">
		<div class="col-lg-2">
			<table class="table table-sm table-hover table-bordered">
				<thead class="bg-gradient-secondary text-white text-center">
					<tr>
						<th>ENTRADA</th>
						<th>VALOR</th>
					</tr>
				</thead>
				<tfoot class="bg-gradient-secondary text-white">
					<tr>
						<th>TOTAL</th>	
						<th>R$ </th>	
					</tr>
				</tfoot>
				<tbody>
					@foreach ( $orders as $order )
					@if ("{{ $order->data_entrada }}" >= "{{ $relatorio->data_entrada }}")
					<tr>
						<td>O.S Nº {{ $order->id }}</td>
						<td>R$ {{ $order->valor_total }}</td>
					</tr>
					@else @endif
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-lg-2">
			<table class="table table-sm table-hover table-bordered">
				<thead class="bg-gradient-danger text-white text-center">
					<tr>
						<th>SAÍDA OFICINAS</th>
						<th>VALOR</th>
					</tr>
				</thead>
				<tbody>
					@foreach ( $orders as $order )
					@if ("{{ $order->data_entrada }}" >= "{{ $order->data_entrada }}" 
					&& "{{ $order->data_saida }}" <= "{{ $order->data_daida }}")
					<tr>
						<td>O.S Nº {{ $order->id }}</td>
						<td>R$ {{ $order->valor_total }}</td>
					</tr>
					@else @endif
					@endforeach
				</tbody>
			</table>

		</div>
		<div class="col-sm-3">
			<table class="table table-sm table-hover table-bordered">
				<thead class="bg-gradient-primary text-white text-center">
					<tr>
						<th>SAÍDA SECRETARIA</th>
						<th>VALOR</th>
					</tr>
				</thead>
				<tbody>
					@foreach ( $orders as $order )
					@if ("{{ $order->data_entrada }}" >= "{{ $order->data_entrada }}" 
					&& "{{ $order->data_saida }}" <= "{{ $order->data_daida }}")
					<tr>
						<td>O.S Nº {{ $order->id }}</td>
						<td>R$ {{ $order->valor_total }}</td>
					</tr>
					@else @endif
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="col-sm-4">
			<table class="table table-bordered">
				<tbody>
					<tr><td>SALDO ANTERIOR</td><td>R$ 10.150,32</td></tr>
					<tr><td>ENTRADA PROJETO</td><td>R$ </td></tr>
					<tr><td>ALUGUEL LANCHE</td><td>R$ </td></tr>
					<tr><td>ENTRADA DIVERSAS</td><td>R$ </td></tr>
					<tr><td>SAÍDA OFICINAS</td><td>R$ </td></tr>
					<tr><td>SAÍDA SECRETARIA</td><td>R$ </td></tr>
					<tr><td>REEDUCANDOS</td><td>R$ </td></tr>
					<tr><td>SALDO ATUAL</td><td>R$ </td></tr>
				</tbody>
			</table>


			<table class="table table-bordered text-center">
				<tbody>
					<tr>
						<td colspan="4" class="bg-gradient-dark text-white">QUANTITATIVO</td>
					</tr>
					<tr>
						<td class="bg-gradient-secondary text-white">PROJETOS</td>
						<td class="bg-gradient-info text-white">CONVÊNIO</td>
						<td class="bg-gradient-danger text-white">PARTICULAR</td>
						<td class="bg-gradient-success text-white">VALOR ARRECADADO</td>
					</tr>
					<tr>
						<td>MECÂNICA E ELÉTRICA</td><td>R$ </td><td>R$ </td><td>R$ 3.565,00</td></tr>
						<tr><td>LATERNAGEM</td><td>R$ </td><td>R$ </td><td>R$ </td></tr>
						<tr><td>POSTO DE LAVAGEM</td><td>R$ </td><td>R$ </td><td>R$ </td></tr>
						<tr><td>SERRALHERIA</td><td>R$ </td><td>R$ </td><td>R$ </td></tr>
						<tr><td>BORRACHARIA</td><td>R$ </td><td>R$ </td><td>R$ </td></tr>
						<tr><td>MARCENARIA</td><td>R$ </td><td>R$ </td><td>R$ </td></tr>
						<tr><td>BARBEARIA</td><td>R$ </td><td>R$ </td><td>R$ </td></tr>
						<tr><td>SEJUC</td><td>R$ </td><td>R$ </td><td>R$ </td></tr>
						<tr><td>TOTAL</td><td>R$ </td><td>R$ </td><td>R$ </td></tr>
					</tbody>
				</table>
			</div>
		</div>

		<hr>

		@endsection
