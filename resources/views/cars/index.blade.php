<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		td{
			border-right:1px solid #000;
			text-align: center;
			padding:10px 20px;
		}
	</style>
</head>
<body>
	<h1>Page Cars List</h1>
	<table>
		<tr>
			<th>Nr.</th>
			<th>Make</th>
			<th>Model</th>
			<th>Year</th>
			<th>Type</th>
		</tr>
		@foreach($cars as $car)
			<tr>
				<td>{{ $car->id }}</td>
				<td>{{ $car->make }}</td>
				<td>{{ $car->model }}</td>
				<td>{{ $car->year }}</td>
				<td>{{ $car->type }}</td>
				<td><a href="car/{{$car->id}}">Show details</a></td>
				
				@if (Auth::check())
					<td>
						<a href="car/edit/{{$car->id}}">Edit</a>
					</td>
				@endif
			
			
				@if (Auth::check())
					<td>
						<a href="car/delete/{{$car->id}}">Delete</a>
					</td>
				@endif
			</tr>
		@endforeach
	</table>
	
	<a href="/">< Home</a>
</body>
</html>