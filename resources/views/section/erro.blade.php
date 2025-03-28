
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
    	<strong>
        @foreach ($errors->all() as $error)
        <li style="text-transform:uppercase">{{ $error }}</li>
        @endforeach
        </strong>
    </ul>
</div>
@endif
