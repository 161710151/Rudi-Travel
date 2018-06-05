@extends('layouts.admin')
@section('content')
<div class="row">
	<div class="container">
		<div class="col-md-12">
			<div class="panel panel-primary">
			  <div class="panel-heading">
			<h1> <center> 	<div class="panel-heading">Data gallery</center></h1> 
			  	<div class="panel-title pull-right"><a href="{{ route('gallery.create') }}">Tambah</a>
			  	</div>
			  </div>
			  <div class="panel-body">
			  	<div class="table-responsive">
				  <table border="3" class="table">
				  	<thead>
			  		<tr>
			  		  <th>No</th>
					  <th>photo</th>
					  <th colspan="3">Action</th>
			  		</tr>
				  	</thead>
				  	<tbody>
				  		<?php $nomor = 1; ?>
				  		@php $no = 1; @endphp
				  		@foreach($gallery as $data)
				  	  <tr>
				    	<td>{{ $no++ }}</td>
				    	<td><img src="img/{{ $data->photo}}" style="max-height:150px;max-width:150px;margin-top:7px;"</td>
						<td>
				<td>
					<a class="btn btn-warning" href="{{ route('gallery.edit',$data->id) }}">Edit</a>
				</td>
				
				<td>
					<form method="post" action="{{ route('gallery.destroy',$data->id) }}">
						<input name="_token" type="hidden" value="{{ csrf_token() }}">
						<input type="hidden" name="_method" value="DELETE">

						<button type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>
				      </tr>
				      @endforeach	
				  	</tbody>
				  </table>
				</div>
			  </div>
			</div>	
		</div>
	</div>
</div>
@endsection