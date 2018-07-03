@if($errors->any())
<div class="container-fluid alert alert-danger">
	<div class="form-group">
		<label class="col-md-4 control-label text-right">
		    Errores :
		</label>
		<div class="col-md-8 col-reset">
			<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach 
			</ul>
		</div>
	</div>	
</div>
@endif