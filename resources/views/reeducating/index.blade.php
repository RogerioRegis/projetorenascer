@extends('layouts.web')

@section('title', 'REEDUCANDOS')

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">

	<h1 class="h3 mb-0 text-gray-800">@foreach ($reeducating as $reed){{$reed->count()}}@endforeach - REEDUCANDOS</h1>

	<div class="btn-group" role="group" aria-label="...">
		<a href="{{ url('reeducandos') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" target="_blanck"><i class="fas fa-user fa-sm text-white-50"></i> VIZUALIZAR REEDUCANDOS</a>
		<a href="{{ route('reeducating.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i class="fas fa-user fa-sm text-white-50"></i> NOVO REEDUCANDO</a>
	</div>
</div>

<!-- DataTales Example -->
<div class="card shadow mb-4 bg-dark-mode border-dark">

	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-dark table-hover bg-dark-mode small" id="dataTable" width="100%" cellspacing="0">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>NOME</th>
						<th>ENTRADA</th>
						<th><i class="fas fa-dollar-sign text-center"></i> REMUNERADO</th>
						<th></th>
					</tr>
				</thead>

				<tfoot class="thead-dark">
					<tr>
						<th>ID</th>
						<th>NOME</th>
						<th>ENTRADA</th>
						<th><i class="fas fa-dollar-sign text-center"></i> REMUNERADO</th>
						<th></th>
					</tr>
				</tfoot>

				<tbody>

					@foreach ( $reeducandos as $reeducando )
					
					@if (($reeducando->status)=="ATIVO")
					
					<tr class="text-sm">

						<td class="text-center">{{ $reeducando->ide }}</td>
						<td>
							<div class="d-flex text-muted pt-3">
								<img class="bd-placeholder-img flex-shrink-0 me-2 rounded-circle" src="{{url('images')}}/perfil_{{ $reeducando->id }}.jpg" alt="Foto do Perfil" height="55" />
								<div class="w-100">
									<div class="d-flex justify-content-between">
										<strong class="text-gray-dark px-2">{{ $reeducando->nome }}</strong>
										<a class="px-2" href="https://wa.me/55{{ $reeducando->telefone }}" target="_blanck">
											{{ $reeducando->telefone }} 
										</a>
									</div>
									<span class="d-block px-2">{{ $reeducando->local }} ({{ $reeducando->categoria }})</span>
								</div>
								<a href="#" data-toggle="modal" data-target="#exampleModal{{$reeducando->id}}">
									<img class="bd-placeholder-img flex-shrink-0 rounded-circle" src="{{url('img')}}/cor/{{ $reeducando->cor}}.jpg" alt="cor" height="35" />
								</a>
							</div>

						</td>
						<td class="text-muted">
							{{date("d/m/Y", strtotime($reeducando->data_entrada))}} <br>
							{{ $reeducando->regime }}
						</td>
						<td>
							@if (($reeducando->paid)=="SIM")
							<div>
								<a href="#" class="btn btn-success btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal{{$reeducando->id}}">
									<span class="icon text-white-50"><i class="fas fa-dollar-sign"></i></span>
									<span class="text">SIM</span>
								</a>
							</div>
							@else
							<div class="text-center">
								<a href="#" class="btn btn-danger btn-icon-split btn-sm" data-toggle="modal" data-target="#exampleModal{{$reeducando->id}}">
									<span class="icon text-white-50"><i class="fas fa-times"></i></i></span>
									<span class="text">NÃO</span>
								</a>
							</div>
							@endif
						</td>
						<td class="text-center">
							<div class="btn-group" role="group" aria-label="...">
								<!-- Editar -->
								<a href="{{url('reeducating')}}/{{ $reeducando->id }}/edit" type="button" class="btn btn-success btn-circle btn-sm" data-toggle="tooltip" data-placement="left" title="Editar" target="_blanck"><i class="fas fa-edit"> </i></a>
								<!-- Imprimir -->
								<a href="{{ route('reeducating.show', $reeducando->id) }}" class="btn btn-primary btn-circle btn-sm" target="_blanck" title="Imprimir"><i class="fas fa-print"></i></a>
							</div>
						</td>
						
					</tr>
					
					@else	@endif

					<!-- Modal* -->

					<div class="modal" id="exampleModal{{$reeducando->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
						<div class="modal-dialog modal-dialog-centered" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<img class="bd-placeholder-img flex-shrink-0 me-2 rounded-circle" src="{{url('images')}}/perfil_{{ $reeducando->id }}.jpg" alt="Foto do Perfil" height="55" />
									<h5 class="modal-title" id="exampleModalLabel">{{ $reeducando->nome }}</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">x</span>
									</button>
								</div>
								<div class="modal-body">
									<form id="create_form" method="post" action="{{ route('reeducating.update', $reeducando->id) }}" enctype="multipart/form-data">
										@method('PATCH')
										@csrf
										<div class="form-row gx-3 mb-3">

											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1"><i class="far fa-money-bill-alt"></i> REMUNERADO</label>
													<select class="custom-select text-primary" name="paid">
														<option>{{$reeducando->paid}}</option>
														<option>SIM</option>
														<option>NÃO</option>
													</select>
												</div>
											</div>


											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1"><img class=" rounded-circle" src="{{url('img')}}/cor/{{$reeducando->cor}}.jpg" alt="cor" height="15"/> COR</label>
													<select class="custom-select text-primary" name="cor">
														<option>{{$reeducando->cor}}</option>
														<option>VERMELHO</option>
														<option>VERDE</option>
														<option>AZUL-DOURADO</option>
														<option>AZUL</option>
													</select>
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1"><i class="fas fa-balance-scale"></i> REGIME</label>
													<select class="custom-select text-primary" name="regime">
														<option>{{$reeducando->regime}}</option>
														<option>FECHADO</option>
														<option>SEMIABERTO</option>
													</select>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label class="small mb-1"><i class="fas fa-user-cog"></i> STATUS</label>
													<select class="custom-select text-primary" name="status">
														<option>{{$reeducando->status}}</option>
														<option>ATIVO</option>
														<option>RESERVA</option>
													</select>
												</div>
											</div>

										</div>
										<!-- ATUALIZAR -->
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary btn-icon-split mb-1"data-dismiss="modal">
												<span class="icon text-white-50"><i class="fas fa-times"></i></span>
												<span class="text">Fechar</span>
											</button>
											<button type="submit" class="btn btn-success btn-icon-split mb-1">
												<span class="icon text-white-50"><i class="fas fa-undo"></i></span>
												<span class="text">ATUALIZAR</span>
											</button>
										</div>
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

<!----------------------------------------------------------------------------->

<div class="row">

	<div class="col-xl-6 col-lg-6">
		<div class="card mb-4 border-dark bg-transparent">
			<div class="card-header bg-gradient-primary">
				<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-wrench"></i> OFICINA MECÂNICA</h5>
			</div>
			<div class="card-body text-gray-400">
				@foreach ( $reeducandos as $reeducando )
				@if (($reeducando->categoria)=="MECÂNICA E ELÉTRICA") 
				<option>{{ $reeducando->nome }}</option>
				@else @endif
				@endforeach
			</div>
		</div>
	</div>


	<div class="col-xl-6 col-lg-6">
		<!-- 01 -->
		<div class="card mb-4 border-dark bg-transparent">
			<div class="card-header bg-gradient-primary">
				<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-wrench"></i> OFICINA MECÂNICA</h6>
				</div>
				<div class="card-body text-gray-400">
					@foreach ( $reeducandos as $reeducando )
					@if (($reeducando->categoria)=="MECÂNICA E ELÉTRICA") 
					<option>{{ $reeducando->nome }}</option>
					@else @endif
					@endforeach
				</div>
			</div>
		</div>

		<div class="col-xl-6 col-lg-6">
			<!-- 02 -->
			<div class="card mb-4 border-dark bg-transparent">
				<div class="card-header bg-gradient-success">
					<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-hands-wash"></i> POSTO DE LAVAGEM</h6>
					</div>
					<div class="card-body text-gray-400">
						@foreach ( $reeducandos as $reeducando )
						@if (($reeducando->categoria)=="POSTO DE LAVAGEM") 
						{{ $reeducando->nome }} 
						<i class="text-xs text-secondary mb-0">{{ $reeducando->function }}</i><br>
						@else @endif
						@endforeach
					</div>
				</div>
			</div>

			<div class="col-xl-6 col-lg-6">
				<!-- 03 -->
				<div class="card mb-4 border-dark bg-transparent">
					<div class="card-header bg-gradient-info">
						<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-car-crash"></i> LANTERNAGEM</h6>
						</div>
						<div class="card-body text-gray-400">
							@foreach ( $reeducandos as $reeducando )
							@if (($reeducando->categoria)=="LANTERNAGEM") 
							<option>{{ $reeducando->nome }}</option>
							@else @endif
							@endforeach
						</div>
					</div>
				</div>

				<div class="col-xl-6 col-lg-6">
					<!-- 04 -->
					<div class="card mb-4 border-dark bg-transparent">
						<div class="card-header bg-gradient-dark">
							<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-bolt"></i> SERRALHERIA</h6>
							</div>
							<div class="card-body text-gray-400">
								@foreach ( $reeducandos as $reeducando )
								@if (($reeducando->categoria)=="SERRALHERIA") 
								<option>{{ $reeducando->nome }}</option>
								@else @endif
								@endforeach
							</div>
						</div>
					</div>

					<div class="col-xl-6 col-lg-6">
						<!-- 05 -->
						<div class="card mb-4 border-dark bg-transparent">
							<div class="card-header bg-gradient-danger">
								<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-hammer"></i> MARCENARIA</h6>
								</div>
								<div class="card-body text-gray-400">
									@foreach ( $reeducandos as $reeducando )
									@if (($reeducando->categoria)=="MARCENARIA") 
									<option>{{ $reeducando->nome }}</option>
									@else @endif
									@endforeach
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-lg-6">
							<!-- 06 -->
							<div class="card mb-4 border-dark bg-transparent">
								<div class="card-header bg-gradient-secondary">
									<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-cogs"></i> SERVIÇOS ESPECIALIZADOS</h6>
									</div>
									<div class="card-body text-gray-400">
										@foreach ( $reeducandos as $reeducando )
										@if (($reeducando->categoria)=="SERVIÇOS GERAIS") 
										{{ $reeducando->nome }}
										<i class="text-xs text-secondary mb-0">{{ $reeducando->function }}</i><br>
										@else @endif
										@endforeach
									</div>
								</div>
							</div>

							<div class="col-xl-6 col-lg-6">
								<!-- 07 -->
								<div class="card mb-4 border-dark bg-transparent">
									<div class="card-header bg-gradient-success">
										<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-exclamation-triangle"></i> BORRACHARIA</h6>
										</div>
										<div class="card-body text-gray-400">
											@foreach ( $reeducandos as $reeducando )
											@if (($reeducando->categoria)=="BORRACHARIA") 
											<option>{{ $reeducando->nome }}</option>
											@else @endif
											@endforeach
										</div>
									</div>
								</div>

								<div class="col-xl-6 col-lg-6">
									<!-- 08 -->
									<div class="card mb-4 border-dark bg-transparent">
										<div class="card-header bg-gradient-info">
											<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-cut"></i> BARBEARIA</h6>
											</div>
											<div class="card-body text-gray-400">
												@foreach ( $reeducandos as $reeducando )
												@if (($reeducando->categoria)=="BARBEARIA") 
												<option>{{ $reeducando->nome }}</option>
												@else @endif
												@endforeach
											</div>
										</div>
									</div>

									<div class="col-xl-6 col-lg-6">
										<!-- 08 -->
										<div class="card mb-4 border-dark bg-transparent">
											<div class="card-header bg-gradient-warning">
												<h5 class="m-0 font-weight-bold text-gray-900"><i class="fas fa-door-open"></i> SEMIABERTOS</h5>
											</div>
											<div class="card-body text-gray-400">
												@foreach ( $reeducandos as $reeducando )
												@if (($reeducando->regime)=="SEMIABERTO")
												<a href="{{url('reeducating')}}/{{ $reeducando->id }}/edit" type="button" class="btn btn-circle btn-sm btn-dark" target="_blanck"><i class="fas fa-edit"> </i></a>
												{{ $reeducando->nome }}<i class="text-xs text-secondary mb-0"> {{$reeducando->categoria}}</i>
												<br>
												@else @endif
												@endforeach
											</div>
										</div>
									</div>


									<div class="col-xl-6 col-lg-6">
										<!-- 10 -->
										<p>
											<button class="btn btn-secondary mb-4 btn-lg btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
												<h5 class="m-0 font-weight-bold text-white"><i class="fas fa-trash-restore-alt"></i> RESERVA</h5>
											</button>
										</p>
										<div class="collapse" id="collapseExample">
											<div class="card card-body border-dark bg-transparent mb-4">
												<div class="text-gray-400">
													@foreach ( $reeducandos as $reeducando )
													@if (($reeducando->status) == "RESERVA") 
													<a href="{{url('reeducating')}}/{{ $reeducando->id }}/edit" type="button" class="btn btn-circle btn-sm btn-dark" target="_blanck"><i class="fas fa-edit"> </i></a> 
													{{ $reeducando->nome }}
													<br>
													@elseif (($reeducando->status) == 0) {{ $reeducando->nome }}
													@endif
													@endforeach
												</div>
											</div>
										</div>
									</div>

								</div><!-- fim do 'row' -->

								<!----------------------------------------------------------------------------->

								<div class="col-xl-6 col-lg-6 mb-4">
									<a href="{{ url('reeducandos') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" target="_blanck"><i class="fas fa-user fa-sm text-white-50"></i> VIZUALIZAR REEDUCANDOS</a>
								</div>

								@endsection

