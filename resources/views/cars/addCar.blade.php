@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	    	@include('layouts.errors')
	        <div class="col-md-8 col-md-offset-2">  
				<form action="store" method="post" class="col-md-6 offset-md-3">
					{{csrf_field()}}
					

					<div class="form-group">
						<label for="make">Make</label>
						<input type="text" name="make" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="model">Model</label>
						<input type="text" name="model" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="year">Year</label>
						<input type="number" name="year" class="form-control" required>
					</div>

					<div class="form-group">
						<label for="type">Type</label>
						<select name="type" id="type" class="form-control">
						@foreach ($types as $type)
							<option value="{{$type}}">{{$type}}</option>
						@endforeach
						</select>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
					</div>
					
					<input type="submit" class="form-control btn btn-primary" value="Add Car" name="submit">
				</form>
			</div>
			<div class="clearfix"></div>
			<a class="btn btn-primary" href="/home">Back</a>
		</div>
	</div>
@endsection