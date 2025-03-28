@extends('layouts.web')

@section('title') ::Novo Relatório @stop

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h5 class="m-0 font-weight-bold"><i class="fas fa-fw fa-calendar-plus"></i> GERAR NOVO RELATÓRIO</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form method="post" action="{{ route('relatorio.store') }}" enctype="multipart/form-data">
			@method('POST')
			@csrf
			<!-- Bloco 01 -->
			<div class="form-row">
				<div class="col">
					<div class="form-group">
						<label for="month" class="text-gray"><i class="fas fa-calendar-day"></i> MÊS</label>
						<select class="custom-select text-primary" name="month">
							<option value="01">1 - JENEIRO</option>
							<option value="02">2 - FEVEREIRO</option>
							<option value="03">3 - MARÇO</option>
							<option value="04">4 - ABRIL</option>
							<option value="05">5 - MAIO</option>
							<option value="06">6 - JUNHO</option>
							<option value="07">7 - JULHO</option>
							<option value="08">8 - AGOSTO</option>
							<option value="09">9 - SETEMBRO</option>
							<option value="10">10 - OUTUBRO</option>
							<option value="11">11 - NOVEMBRO</option>
							<option value="12">12 - DEZEMBRO</option>
						</select>
					</div>
				</div>

				<div class="col">
					<div class="form-group">
						<label for="year" class="text-gray"><i class="fas fa-calendar-plus"></i> ANO</label>
						<select class="custom-select text-primary" name="year">
							@foreach ( $anos as $ano )
							<option value="{{ $ano->year }}">{{ $ano->year }}</option>
							@endforeach
						</select>
					</div>
				</div>

				<div class="col">
					<div class="form-group">
						<label for="data_inicio" class="text-gray"><i class="fas fa-play"></i> DATA DE INÍCIO</label>
						<input name="data_inicio" type="date" class="form-control text-primary">
					</div>
				</div>

				<div class="col">
					<div class="form-group">
						<label for="data_fim" class="text-gray"><i class="fas fa-stop"></i> DATA DO FIM</label>
						<input name="data_fim" type="date" class="form-control text-primary">
					</div>
				</div>

				<div class="col-lg-2">
					<div class="form-group">
						<label for="year" class="text-gray"> ADICIONAR</label>
						<a href="{{route('year.create')}}" class="btn btn-secondary">
						<i class="fas fa-calendar-plus"></i> Novo Ano</a> 
					</div>
					
				</div>

				<div class="col-lg-12">
					<div class="form-group">
						<a href="{{url('relatorio')}}" class="btn btn-secondary">
						<i class="fa fa-reply"></i> Cancelar</a>
						<button type="submit" class="btn btn-success fa-2x">
							SALVAR <i class="fa fa-save"></i> 
						</button>  
					</div> 
				</div>
			</div>        
		</form>
		<!-- FIM DO Formulário -->
	</div>
</div>
	
@endsection