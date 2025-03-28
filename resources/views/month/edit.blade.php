@extends('layouts.list')

@section('title') ::Editar Mês @stop

@section('content')

<!-- DataTales Example -->
<div class="card shadow mb-4">

	<div class="card-header py-3">
		<h5 class="m-0 font-weight-bold"><i class="fas fa-edit"></i> EDITAR MÊS</h5>
	</div>

	<!-- Formulário -->
	<div class="card-body text-gray-900 font-weight-bold">

		<form method="post" action="{{ route('month.update', $months->id) }}" enctype="multipart/form-data">
			@method('PATCH')
			@csrf


			@if ($message = Session::get('success'))
			<div class="alert alert-success alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>{{ $message }}</strong>
			</div>
			@endif

			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			<div class="row">
				
				<div class="dropdown-divider"></div>

				<div class="form-row">
					<div class="col-md-5">
						<div class="form-group">
							<label for="month">MÊS</label>
							<input class="form-control text-primary" name="month" type="text"
							value="{{ $months->month }}">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="year">ANO</label>
							<input class="form-control text-primary" name="year" type="text"
							value="{{ $months->year }}">
						</div>
					</div>
					<div class="col">
						<div class="form-group">
							<label for="contato">OUTROS</label>
							<input class="form-control text-primary" name="contato" type="text"
							value="{{ $months->contato }}">
						</div>
					</div>
				</div>

				<div class="dropdown-divider"></div>

				<!-- **...DIA 01...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<label for="ativo_01">ATIVO</label>
						<select class="custom-select text-primary" name="ativo_01">
							<option>{{ $months->ativo_01 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<label for="day_01">DIA</label>
						<input class="form-control mb-1 text-primary text-center" name="day_01" type="text" value="1">
					</div>
					<div class="col-1">
						<label for="week_01">SEM.</label>
						<input class="form-control mb-1 text-primary text-center" name="week_01" type="text" value="{{ $months->week_01 }}">
					</div>
					<div class="col-1">
						<label for="entrada_a01">ENTRADA</label>
						<input class="form-control mb-1 text-primary text-center" name="entrada_a01" type="text" value="{{ $months->entrada_a01 }}">
					</div>
					<div class="col-1">
						<label for="saida_a01">SAÍDA</label>
						<input class="form-control mb-1 text-primary text-center" name="saida_a01" type="text" value="{{ $months->saida_a01 }}">
					</div>
					<div class="col-1">
						<label for="entrada_b01">ENTRADA</label>
						<input class="form-control mb-1 text-primary text-center" name="entrada_b01" type="text" value="{{ $months->entrada_b01 }}">
					</div>
					<div class="col-1">
						<label for="saida_b01">SAÍDA</label>
						<input class="form-control mb-1 text-primary text-center" name="saida_b01" type="text" value="{{ $months->saida_b01 }}">
					</div>
					<div class="col-4">
						<label for="ass_01">ASSINATURA</label>
						<input class="form-control mb-1 text-primary text-center" name="ass_01" type="text" value="{{ $months->ass_01 }}">
					</div>
				</div>

				<!-- **...DIA 02...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_02">
							<option>{{ $months->ativo_02 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_02" type="text" value="2">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_02" type="text" value="{{ $months->week_02 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a02" type="text" value="{{ $months->entrada_a02 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a02" type="text" value="{{ $months->saida_a02 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b02" type="text" value="{{ $months->entrada_b02 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b02" type="text" value="{{ $months->saida_b02 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_02" type="text" value="{{ $months->ass_02 }}">
					</div>
				</div>

				<!-- **...DIA 03...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_03">
							<option>{{ $months->ativo_03 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_03" type="text" value="3">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_03" type="text" value="{{ $months->week_03 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a03" type="text" value="{{ $months->entrada_a03 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a03" type="text" value="{{ $months->saida_a03 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b03" type="text" value="{{ $months->entrada_b03 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b03" type="text" value="{{ $months->saida_b03 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_03" type="text" value="{{ $months->ass_03 }}">
					</div>
				</div>

				<!-- **...DIA 04...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_04">
							<option>{{ $months->ativo_04 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_04" type="text" value="4">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_04" type="text" value="{{ $months->week_04 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a04" type="text" value="{{ $months->entrada_a04 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a04" type="text" value="{{ $months->saida_a04 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b04" type="text" value="{{ $months->entrada_b04 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b04" type="text" value="{{ $months->saida_b04 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_04" type="text" value="{{ $months->ass_04 }}">
					</div>
				</div>

				<!-- **...DIA 05...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_05">
							<option>{{ $months->ativo_05 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_05" type="text" value="5">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_05" type="text" value="{{ $months->week_05 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a05" type="text" value="{{ $months->entrada_a05 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a05" type="text" value="{{ $months->saida_a05 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b05" type="text" value="{{ $months->entrada_b05 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b05" type="text" value="{{ $months->saida_b05 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_05" type="text" value="{{ $months->ass_05 }}">
					</div>
				</div>

				<!-- **...DIA 06...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_06">
							<option>{{ $months->ativo_06 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_06" type="text" value="6">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_06" type="text" value="{{ $months->week_06 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a06" type="text" value="{{ $months->entrada_a06 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a06" type="text" value="{{ $months->saida_a06 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b06" type="text" value="{{ $months->entrada_b06 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b06" type="text" value="{{ $months->saida_b06 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_06" type="text" value="{{ $months->ass_06 }}">
					</div>
				</div>

				<!-- **...DIA 07...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_07">
							<option>{{ $months->ativo_07 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_07" type="text" value="7">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_07" type="text" value="{{ $months->week_07 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a07" type="text" value="{{ $months->entrada_a07 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a07" type="text" value="{{ $months->saida_a07 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b07" type="text" value="{{ $months->entrada_b07 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b07" type="text" value="{{ $months->saida_b07 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_07" type="text" value="{{ $months->ass_07 }}">
					</div>
				</div>

				<!-- **...DIA 08...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_08">
							<option>{{ $months->ativo_08 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_08" type="text" value="8">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_08" type="text" value="{{ $months->week_08 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a08" type="text" value="{{ $months->entrada_a08 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a08" type="text" value="{{ $months->saida_a08 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b08" type="text" value="{{ $months->entrada_b08 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b08" type="text" value="{{ $months->saida_b08 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_08" type="text" value="{{ $months->ass_08 }}">
					</div>
				</div>

				<!-- **...DIA 09...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_09">
							<option>{{ $months->ativo_09 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_09" type="text" value="9">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_09" type="text" value="{{ $months->week_09 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a09" type="text" value="{{ $months->entrada_a09 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a09" type="text" value="{{ $months->saida_a09 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b09" type="text" value="{{ $months->entrada_b09 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b09" type="text" value="{{ $months->saida_b09 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_09" type="text" value="{{ $months->ass_09 }}">
					</div>
				</div>

				<!-- **...DIA 10...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_10">
							<option>{{ $months->ativo_10 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_10" type="text" value="10">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_10" type="text" value="{{ $months->week_10 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a10" type="text" value="{{ $months->entrada_a10 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a10" type="text" value="{{ $months->saida_a10 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b10" type="text" value="{{ $months->entrada_b10 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b10" type="text" value="{{ $months->saida_b10 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_10" type="text" value="{{ $months->ass_10 }}">
					</div>
				</div>

				<!-- **...DIA 11...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_11">
							<option>{{ $months->ativo_11 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_11" type="text" value="11">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_11" type="text" value="{{ $months->week_11 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a11" type="text" value="{{ $months->entrada_a11 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a11" type="text" value="{{ $months->saida_a11 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b11" type="text" value="{{ $months->entrada_b11 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b11" type="text" value="{{ $months->saida_b11 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_11" type="text" value="{{ $months->ass_11 }}">
					</div>
				</div>

				<!-- **...DIA 12...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_12">
							<option>{{ $months->ativo_12 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_12" type="text" value="12">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_12" type="text" value="{{ $months->week_12 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a12" type="text" value="{{ $months->entrada_a12 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a12" type="text" value="{{ $months->saida_a12 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b12" type="text" value="{{ $months->entrada_b12 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b12" type="text" value="{{ $months->saida_b12 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_12" type="text" value="{{ $months->ass_12 }}">
					</div>
				</div>

				<!-- **...DIA 13...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_13">
							<option>{{ $months->ativo_13 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_13" type="text" value="13">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_13" type="text" value="{{ $months->week_13 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a13" type="text" value="{{ $months->entrada_a13 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a13" type="text" value="{{ $months->saida_a13 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b13" type="text" value="{{ $months->entrada_b13 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b13" type="text" value="{{ $months->saida_b13 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_13" type="text" value="{{ $months->ass_13 }}">
					</div>
				</div>

				<!-- **...DIA 14...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_14">
							<option>{{ $months->ativo_14 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_14" type="text" value="14">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_14" type="text" value="{{ $months->week_14 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a14" type="text" value="{{ $months->entrada_a14 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a14" type="text" value="{{ $months->saida_a14 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b14" type="text" value="{{ $months->entrada_b14 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b14" type="text" value="{{ $months->saida_b14 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_14" type="text" value="{{ $months->ass_14 }}">
					</div>
				</div>

				<!-- **...DIA 15...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_15">
							<option>{{ $months->ativo_15 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_15" type="text" value="15">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_15" type="text" value="{{ $months->week_15 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a15" type="text" value="{{ $months->entrada_a15 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a15" type="text" value="{{ $months->saida_a15 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b15" type="text" value="{{ $months->entrada_b15 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b15" type="text" value="{{ $months->saida_b15 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_15" type="text" value="{{ $months->ass_15 }}">
					</div>
				</div>

				<!-- **...DIA 16...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_16">
							<option>{{ $months->ativo_16 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_16" type="text" value="16">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_16" type="text" value="{{ $months->week_16 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a16" type="text" value="{{ $months->entrada_a16 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a16" type="text" value="{{ $months->saida_a16 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b16" type="text" value="{{ $months->entrada_b16 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b16" type="text" value="{{ $months->saida_b16 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_16" type="text" value="{{ $months->ass_16 }}">
					</div>
				</div>

				<!-- **...DIA 17...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_17">
							<option>{{ $months->ativo_17 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_17" type="text" value="17">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_17" type="text" value="{{ $months->week_17 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a17" type="text" value="{{ $months->entrada_a17 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a17" type="text" value="{{ $months->saida_a17 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b17" type="text" value="{{ $months->entrada_b17 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b17" type="text" value="{{ $months->saida_b17 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_17" type="text" value="{{ $months->ass_17 }}">
					</div>
				</div>

				<!-- **...DIA 18...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_18">
							<option>{{ $months->ativo_18 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_18" type="text" value="18">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_18" type="text" value="{{ $months->week_18 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a18" type="text" value="{{ $months->entrada_a18 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a18" type="text" value="{{ $months->saida_a18 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b18" type="text" value="{{ $months->entrada_b18 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b18" type="text" value="{{ $months->saida_b18 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_18" type="text" value="{{ $months->ass_18 }}">
					</div>
				</div>

				<!-- **...DIA 19...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_19">
							<option>{{ $months->ativo_19 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_19" type="text" value="19">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_19" type="text" value="{{ $months->week_19 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a19" type="text" value="{{ $months->entrada_a19 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a19" type="text" value="{{ $months->saida_a19 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b19" type="text" value="{{ $months->entrada_b19 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b19" type="text" value="{{ $months->saida_b19 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_19" type="text" value="{{ $months->ass_19 }}">
					</div>
				</div>

				<!-- **...DIA 20...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_20">
							<option>{{ $months->ativo_20 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_20" type="text" value="20">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_20" type="text" value="{{ $months->week_20 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a20" type="text" value="{{ $months->entrada_a20 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a20" type="text" value="{{ $months->saida_a20 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b20" type="text" value="{{ $months->entrada_b20 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b20" type="text" value="{{ $months->saida_b20 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_20" type="text" value="{{ $months->ass_20 }}">
					</div>
				</div>

				<!-- **...DIA 21...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_21">
							<option>{{ $months->ativo_21 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_21" type="text" value="21">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_21" type="text" value="{{ $months->week_21 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a21" type="text" value="{{ $months->entrada_a21 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a21" type="text" value="{{ $months->saida_a21 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b21" type="text" value="{{ $months->entrada_b21 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b21" type="text" value="{{ $months->saida_b21 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_21" type="text" value="{{ $months->ass_21 }}">
					</div>
				</div>

				<!-- **...DIA 22...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_22">
							<option>{{ $months->ativo_22 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_22" type="text" value="22">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_22" type="text" value="{{ $months->week_22 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a22" type="text" value="{{ $months->entrada_a22 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a22" type="text" value="{{ $months->saida_a22 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b22" type="text" value="{{ $months->entrada_b22 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b22" type="text" value="{{ $months->saida_b22 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_22" type="text" value="{{ $months->ass_22 }}">
					</div>
				</div>

				<!-- **...DIA 23...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_23">
							<option>{{ $months->ativo_23 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_23" type="text" value="23">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_23" type="text" value="{{ $months->week_23 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a23" type="text" value="{{ $months->entrada_a23 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a23" type="text" value="{{ $months->saida_a23 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b23" type="text" value="{{ $months->entrada_b23 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b23" type="text" value="{{ $months->saida_b23 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_23" type="text" value="{{ $months->ass_23 }}">
					</div>
				</div>

				<!-- **...DIA 24...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_24">
							<option>{{ $months->ativo_24 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_24" type="text" value="24">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_24" type="text" value="{{ $months->week_24 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a24" type="text" value="{{ $months->entrada_a24 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a24" type="text" value="{{ $months->saida_a24 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b24" type="text" value="{{ $months->entrada_b24 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b24" type="text" value="{{ $months->saida_b24 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_24" type="text" value="{{ $months->ass_24 }}">
					</div>
				</div>

				<!-- **...DIA 25...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_25">
							<option>{{ $months->ativo_25 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_25" type="text" value="25">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_25" type="text" value="{{ $months->week_25 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a25" type="text" value="{{ $months->entrada_a25 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a25" type="text" value="{{ $months->saida_a25 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b25" type="text" value="{{ $months->entrada_b25 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b25" type="text" value="{{ $months->saida_b25 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_25" type="text" value="{{ $months->ass_25 }}">
					</div>
				</div>

				<!-- **...DIA 26...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_26">
							<option>{{ $months->ativo_26 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_26" type="text" value="26">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_26" type="text" value="{{ $months->week_26 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a26" type="text" value="{{ $months->entrada_a26 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a26" type="text" value="{{ $months->saida_a26 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b26" type="text" value="{{ $months->entrada_b26 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b26" type="text" value="{{ $months->saida_b26 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_26" type="text" value="{{ $months->ass_26 }}">
					</div>
				</div>

				<!-- **...DIA 27...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_27">
							<option>{{ $months->ativo_27 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_27" type="text" value="27">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_27" type="text" value="{{ $months->week_27 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a27" type="text" value="{{ $months->entrada_a27 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a27" type="text" value="{{ $months->saida_a27 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b27" type="text" value="{{ $months->entrada_b27 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b27" type="text" value="{{ $months->saida_b27 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_27" type="text" value="{{ $months->ass_27 }}">
					</div>
				</div>

				<!-- **...DIA 28...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_28">
							<option>{{ $months->ativo_28 }}</option>
							<option>FOLGA</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_28" type="text" value="28">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_28" type="text" value="{{ $months->week_28 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a28" type="text" value="{{ $months->entrada_a28 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a28" type="text" value="{{ $months->saida_a28 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b28" type="text" value="{{ $months->entrada_b28 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b28" type="text" value="{{ $months->saida_b28 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_28" type="text" value="{{ $months->ass_28 }}">
					</div>
				</div>

				<!-- **...DIA 29...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_29">
							<option>{{ $months->ativo_29 }}</option>
							<option>FOLGA</option>
							<option>OCULTO</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_29" type="text" value="29">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_29" type="text" value="{{ $months->week_29 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a29" type="text" value="{{ $months->entrada_a29 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a29" type="text" value="{{ $months->saida_a29 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b29" type="text" value="{{ $months->entrada_b29 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b29" type="text" value="{{ $months->saida_b29 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_29" type="text" value="{{ $months->ass_29 }}">
					</div>
				</div>

				<!-- **...DIA 30...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_30">
							<option>{{ $months->ativo_30 }}</option>
							<option>FOLGA</option>
							<option>OCULTO</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_30" type="text" value="30">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_30" type="text" value="{{ $months->week_30 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a30" type="text" value="{{ $months->entrada_a30 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a30" type="text" value="{{ $months->saida_a30 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b30" type="text" value="{{ $months->entrada_b30 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b30" type="text" value="{{ $months->saida_b30 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_30" type="text" value="{{ $months->ass_30 }}">
					</div>
				</div>				

				<!-- **...DIA 31...**  --->
				<div class="form-row text-center">
					<div class="col-2">
						<select class="custom-select text-primary" name="ativo_31">
							<option>{{ $months->ativo_31 }}</option>
							<option>FOLGA</option>
							<option>OCULTO</option>
							<option></option>
						</select>
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="day_31" type="text" value="31">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="week_31" type="text" value="{{ $months->week_31 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_a31" type="text" value="{{ $months->entrada_a31 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_a31" type="text" value="{{ $months->saida_a31 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="entrada_b31" type="text" value="{{ $months->entrada_b31 }}">
					</div>
					<div class="col-1">
						<input class="form-control mb-1 text-primary text-center" name="saida_b31" type="text" value="{{ $months->saida_b31 }}">
					</div>
					<div class="col-4">
						<input class="form-control mb-1 text-primary text-center" name="ass_31" type="text" value="{{ $months->ass_31 }}">
					</div>
				</div>	


				<!-- FIM DO MÊS  --->

				<!-- SALVAR  --->
				<div class="form-row">
					<div class="col-md-5">
						<a href="{{url('month')}}" class="btn btn-secondary"><i class="fa fa-reply"></i> Cancelar</a>
						<button type="submit" class="btn btn-success fa-2x"><i class="fas fa-undo-alt"></i> ATUALIZAR <i class="fa fa-save"></i> </button>
					</div>
				</div>

			</form>
			<!-- FIM DO Formulário -->
		</div>

		@endsection