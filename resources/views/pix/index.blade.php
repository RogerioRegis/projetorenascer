@extends('layouts.web')

@section('title', 'PAGO COM PIX')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">PAGAMENTOS COM PIX</h1>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-hover table-green" id="dataTable" width="100%" cellspacing="0">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>DATA</th>
						<th>NOME</th>
						<th>CPF</th>
						<th>CONTATO</th>
						<th>VEÍCULO/OBJETO</th>
						<th>VALOR</th>
						<th>REEDUCANDO</th>
						<th>PIX</th>
					</tr>
				</thead>
				<tbody>
					@foreach ( $pagamentos as $order )
					@if ($order->payment == "PIX")
					<tr class="small">
						<td class="text-uppercase">{{ $order->id }}</td>
						<td class="text-uppercase">{{date("d/m/Y", strtotime($order->data_saida))}}</td>
						<td class="text-uppercase">{{ $order->cliente }}</td>
						<td class="text-uppercase">{{ $order->cpf }}</td>
						<td class="text-uppercase">{{ $order->contato }}</td>
						<td class="text-uppercase">{{ $order->veiculo }}</td>
						<td class="text-uppercase">{{ $order->valor_total }}</td>
						<td class="text-uppercase">{{ $order->reeducando }}</td>
						<td class="text-center">
							<a href="#" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal{{$order->id}}">
								<span class="icon text-white-50"><i class="fas fa-id-card"></i></span>
								<span class="text">SIM</span>
							</a>
						</td>
					</tr>	
					@else
					@endif
					<!-- Modal* -->
					<div class="modal" id="exampleModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLabel">{{ $order->cliente }}</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">x</span>
									</button>
								</div>
								<div class="modal-body">
									<form id="create_form" method="post" action="{{ route('pix.update', $order->id) }}">
										@method('PATCH')
										@csrf
										<div class="form-row gx-3 mb-3">
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1" for="payment">FORMA DE PAGAMENTO</label>
													<select class="custom-select text-primary" name="payment">
														<option>{{$order->payment}}</option>
														<option>DINHEIRO</option>
														<option>PIX</option>
													</select>
												</div>
											</div>
										</div>
										<!-- ATUALIZAR -->
										<button type="submit" class="btn btn-success btn-icon-split mb-1">
											<span class="icon text-white-50"><i class="fas fa-save"></i></span>
											<span class="text">ATUALIZAR</span>
										</button> 
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- *Fim Modal -->
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@endsection
