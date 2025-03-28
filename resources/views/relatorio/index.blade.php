@extends('layouts.web')

@section('title', 'Relatórios')

@section('content')

<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h4 class="h3 mb-0 text-gray-800">Relatórios Financeiro do Projeto Renascer</h4>
		<a href="{{ route('relatorio.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
			<i class="fas fa-file-invoice-dollar fa-sm text-white-50"></i> NOVO RELATÓRIO
		</a>
	</div>



	<div class="row">
		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Relatório Anual</div>
							<div class="btn-group" role="group" aria-label="Basic example">
								<button class="btn btn-primary"><i class="fas fa-calendar text-gray-300"></i></button>
								<a class="btn btn-group-lg btn-outline-primary font-weight-bold" href="{{url('#')}}" role="button">2019</a>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-success text-uppercase mb-1">Relatório Anual</div>
							<div class="btn-group" role="group" aria-label="Basic example">
								<button class="btn btn-success"><i class="fas fa-calendar"></i></button>
								<a class="btn btn-group-lg btn-outline-success font-weight-bold" href="{{url('#')}}" role="button">2020</a>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Earnings (Monthly) Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Relatório Anual</div>
							<div class="btn-group" role="group" aria-label="Basic example">
								<button class="btn btn-info"><i class="fas fa-calendar"></i></button>
								<a class="btn btn-group-lg btn-outline-info font-weight-bold" href="{{url('order2021')}}" role="button">2021</a>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Relatório Anual</div>
							<div class="btn-group" role="group" aria-label="Basic example">
								<button class="btn btn-warning"><i class="fas fa-calendar"></i></button>
								<a class="btn btn-group-lg btn-outline-warning font-weight-bold" href="{{url('order2022')}}" role="button">2022</a>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
	    <!-- Pending Requests Card Example -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-secondary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">Relatório Anual</div>
							<div class="btn-group" role="group" aria-label="Basic example">
								<button class="btn btn-secondary"><i class="fas fa-calendar"></i></button>
								<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('order2023')}}" role="button">2023</a>
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>









	

	<i class="fas fa-file-invoice-dollar"></i> ÚLTIMO <strong>RELATÓRIO</strong> ABERTO:

	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover table-green">
			<thead class="thead-dark text-center">
				<tr>
					<th>MÊS</th>
					<th></th>
					<th>ANO</th>
					<th>EDITAR</th>
					<th>VIZUALIZAR</th>
					<th>IMPRIMIR</th>
				</tr>
			</thead>
			<tbody class="text-center">
				@foreach ( $relatory as $relatorio )
				<tr>
					<td class="text-uppercase">{{ $relatorio->month }}</td>
					<td class="text-uppercase">DE</td>
					<td class="text-uppercase">{{ $relatorio->year }}</td>
					<td class="text-center">
						<a href="relatorio/{{ $relatorio->id }}/edit" class="btn btn-success btn-icon-split btn-sm">
							<span class="icon text-white-50"><i class="fas fa-edit"></i></span>
							<span class="text">EDITAR</span>
						</a>
					</td>
					<td class="text-center">
						<a href="{{ route('relatorio.show', $relatorio->id) }}" class="btn btn-primary btn-icon-split btn-sm">
							<span class="icon text-white-50"><i class="fas fa-eye"></i></span>
							<span class="text">VIZUALIZAR</span>
						</td>
						<td class="text-center">
							<a href="{{ route('relatorio.show', $relatorio->id) }}" class="btn btn-secondary btn-icon-split btn-sm">
								<span class="icon text-white-50"><i class="fas fa-print"></i></span>
								<span class="text">IMPRIMIR</span>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>




			<div class="row">

				<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<a class="btn btn-secondary" href="{{url('dezenove_orders')}}"><i class="fas fa-edit text-gray-300"></i></a>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<a class="fas fa-file-pdf fa-2x text-gray-300" href="{{url('dezenove_orders')}}" role="button"></a>
								</div>
							</div>
						</div>
					</div>
				</div>

								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">FEVEREIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">MARÇO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>


								<div class="col-xl-3 col-md-3 mb-3">
					<div class="card border-left-secondary shadow h-100 py-0">
						<div class="card-body">
							<div class="row no-gutters align-items-center">
								<div class="col mr-0">
									<div class="font-weight-bold text-secondary text-uppercase mb-1">JANEIRO</div>
									<div class="btn-group" role="group" aria-label="Basic example">
										<button class="btn btn-secondary"><i class="fas fa-file-pdf text-gray-300"></i></button>
										<a class="btn btn-group-lg btn-outline-secondary font-weight-bold" href="{{url('dezenove_orders')}}" role="button">Vizualizar</a>
									</div>
								</div>
								<div class="col-auto">
									<i class="fas fa-file-pdf fa-2x text-gray-300"></i>
								</div>
							</div>
						</div>
					</div>
				</div>



			</div>





















			<!-- DataTales Example -->
			<div class="card shadow mb-4">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-hover" id="dataTable" width="100%" cellspacing="0">
							<thead class="thead-dark text-center">
								<tr>
									<th>MÊS</th>
									<th>ANO</th>
									<th>Criado em:</th>
									<th>EDITAR</th>
									<th>VIZUALIZAR</th>
									<th>EXCLUIR</th>
								</tr>
							</thead>

							<tbody class="text-center">

								@foreach ( $relatorios as $relatorio )
								<tr>
									<td>{{ $relatorio->month }}</td>
									<td>{{ $relatorio->year }}</td>
									<td>{{ $relatorio->created_at }}</td>
									<td class="text-center">
										<a href="relatorio/{{ $relatorio->id }}/edit" class="btn btn-success btn-icon-split btn-sm">
											<span class="icon text-white-50"><i class="fas fa-edit"></i></span>
											<span class="text">EDITAR</span>
										</a>
									</td>							
									<td class="text-center">
										<a href="{{url('relatorio')}}/{{ $relatorio->id }}" class="btn btn-primary btn-icon-split btn-sm">
											<span class="icon text-white-50"><i class="fas fa-eye"></i></span>
											<span class="text">VIZUALIZAR</span>
										</a>
									</td>
									<td class="text-center">

										<a href="#" class="btn btn-danger btn-icon-split btn-sm">
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

		</div>
		<!-- /.container-fluid -->


		@endsection
