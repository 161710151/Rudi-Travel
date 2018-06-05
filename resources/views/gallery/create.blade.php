@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
	<h1>	<center><div class="panel-heading">Tambah Data Gallery</center></h1>
			  	<div class="panel-title pull-right"><a href="{{ url()->previous() }}">Kembali</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<form action="{{ route('gallery.store') }}" method="post" >
			  		{{ csrf_field() }}
			  		<div class="form-group {{ $errors->has('photo') ? ' has-error' : '' }}">
			  			<label class="control-label">Photo</label>	
			  			<input type="file" name="photo" class="form-control"  required>
			  			@if ($errors->has('photo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('photo') }}</strong>
                            </span>
                        @endif
			  		</div>

			  		<div class="form-group">
			  			<button type="submit" class="btn btn-primary">Tambah</button>
			  		</div>
			  	</form>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection