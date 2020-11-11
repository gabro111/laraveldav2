@extends('layouts.al-car-main')
@section('content')

   <table class="table">
    <tr>
        <th>iD</th>
        <th>name</th>
        <th>make</th>
        <th>model</th>
        <th>license_number</th>
        <th>weight</th>
        <th>registration_year</th>
        <th>actions<th>
        
    </tr>


@foreach ($cars as $car)
<tr>
    <td>{{$car->id }}</td>
    <td>{{$car->name }}</td>
    <td>{{$car->make }}</td>
    <td>{{$car->model }}</td>
    <td>{{$car->license_number }}</td>
    <td>{{$car->weight }}</td>
    <td>{{$car->registartion_year }}</td>
    <td>
        <form action="/product/delete" method="POST">
            @csrf
        <input type="hidden" name="id" value="{{$car->id}}">
        <button class="btn btn-danger">Delete</button>
        </form>
        <a href="/product/editind?id={{$car->id}}" class="btn btn-light">Edit</a>

    </td>
    
    
</tr>
@endforeach

@endsection