@extends('layouts.perfil')

@section('title') Reeducando @stop

@section('content')

<!-- Page Heading -->
<div class="d-sm-flex text-center text-white justify-content-between mb-2">
	<a href="{{ url('reeducando') }}">
		<img class="img-fluid mt-3" src="{{ url('img/logo_renascer_horizontal_b.svg') }}" width="250" />
	</a>
</div>

<hr class="mt-0 mb-4 text-gray-200" />
<div class="row">
	<div class="col-xl-4">
		<!-- Profile picture card-->
		<div class="card mb-4 mb-xl-0">
			<div class="card-header text-gray-800 bg-gray-300">Foto do perfil</div>
			<div class="card-body text-center mt-0 mb-0">
				<!-- Profile picture image-->
				<img class="img-fluid rounded-circle mb-0" 
				src="{{ url('img/logo_projeto_renascer.png') }}" width="200" />
			</div>
			<!-- Bandeira da nacionalidade-->
			<div class="small font-italic text-center mt-0 mb-0">Nacionalidade<br>
				<img class="img-fluid mb-2" src="{{ url('img/bandeiras/brasil.png') }}" width="60" alt="" />
			</div>
		</div>
	</div>
	<div class="col-xl-8">
		<!-- Account details card-->
		<div class="card mb-4">
			<div class="card-header text-gray-800 bg-gray-300">Dados do Reeducando</div>
			<div class="card-body">
				<form>
					<!-- Form Group (username)-->
					<div class="mb-3">
						<label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
						<input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username" />
					</div>
					<!-- Form Row-->
					<div class="row gx-3 mb-3">
						<!-- Form Group (first name)-->
						<div class="col-md-6">
							<label class="small mb-1" for="inputFirstName">First name</label>
							<input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie" />
						</div>
						<!-- Form Group (last name)-->
						<div class="col-md-6">
							<label class="small mb-1" for="inputLastName">Last name</label>
							<input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna" />
						</div>
					</div>
					<!-- Form Row        -->
					<div class="row gx-3 mb-3">
						<!-- Form Group (organization name)-->
						<div class="col-md-6">
							<label class="small mb-1" for="inputOrgName">Organization name</label>
							<input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap" />
						</div>
						<!-- Form Group (location)-->
						<div class="col-md-6">
							<label class="small mb-1" for="inputLocation">Location</label>
							<input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA" />
						</div>
					</div>
					<!-- Form Group (email address)-->
					<div class="mb-3">
						<label class="small mb-1" for="inputEmailAddress">Email address</label>
						<input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com" />
					</div>
					<!-- Form Row-->
					<div class="row gx-3 mb-3">
						<!-- Form Group (phone number)-->
						<div class="col-md-6">
							<label class="small mb-1" for="inputPhone">Phone number</label>
							<input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567" />
						</div>
						<!-- Form Group (birthday)-->
						<div class="col-md-6">
							<label class="small mb-1" for="inputBirthday">Birthday</label>
							<input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988" />
						</div>
					</div>
					<!-- Save changes button-->
					<button class="btn btn-primary" type="button">Save changes</button>
				</form>
			</div>
		</div>
	</div>
</div>

@endsection