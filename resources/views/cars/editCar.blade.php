@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	    	@include('layouts.errors')
	        <div class="col-md-8 col-md-offset-2">  
				<form action="{{$car->id}}" method="post" role="form" class="col-md-6 offset-md-3">

					<div class="form-group">
						<label for="make">Make</label>
						<input type="text" name="make" value="{{ $car->make }}" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="model">Model</label>
						<input type="text" name="model" value="{{ $car->model }}" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="year">Year</label>
						<input type="number" name="year" value="{{ $car->year }}" class="form-control" required>
					</div>
					
					<div class="form-group">
						<label for="type">Type</label>
						<select type="text" name="type" class="form-control"  value="{{ $car->type }}">
							@foreach ($types as $type)
								<option
								<?php if ($type == $car->type): ?>
									selected
								<?php endif ?>
								 value="{{$type}}">{{$type}}</option>
							@endforeach
						</select>
						<input type="hidden" name="_token" value="{{csrf_token()}}">
					</div>
					<input type="submit"  value="Edit Car" name="Edit" class="form-control btn btn-primary">
				</form>
			</div>
			<div class="clearfix"></div>
			<a class="btn btn-primary" href="/home">Back</a>
		</div>
	</div>
@endsection