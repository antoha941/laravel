@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-dark">
                <thead class="thead-light">
                    <tr>
                        <th scope="row">Nr.</th>
                        <th scope="row">Make</th>
                        <th scope="row">Model</th>
                        <th scope="row">Year</th>
                        <th scope="row">Type</th>
                        <th scope="row">Operation</th>
                    </tr>
                    @foreach($cars as $car)
                        <tr>
                            <td>{{ $car->id }}</td>
                            <td>{{ $car->make }}</td>
                            <td>{{ $car->model }}</td>
                            <td>{{ $car->year }}</td>
                            <td>{{ $car->type }}</td>
                            <td>
                                <a class="btn btn-primary" href="/car/{{$car->id}}">Show details</a>
                                <a class="btn btn-success" href="edit/{{$car->id}}">Edit</a>
                                <a class="btn btn-danger" href="delete/{{$car->id}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </thead>
            </table>
            <a class="btn btn-primary" href="/home">Back</a>
        </div>
    </div>
</div>
@endsection