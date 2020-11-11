
@extends('layouts.al-car-main')
@section('content')

<form action = "/product/add" method="POST" >
    @csrf

    <table class="table"">
        <tr>
            
            <th>name</th>
            <th>make</th>
            <th>model</th>
            <th>license_number</th>
            <th>weight</th>
            <th>registration_year</th>
            
            
        </tr>
    
    <tr>
        


        <td><input class="form-control" type="text" name="name" placeholder="Enter owner name:"></td>
        <td><input class="form-control" type="text" name="make" placeholder="Enter car make:"></td>
        <td><input class="form-control" type="text" name="model" placeholder="Enter car model:"></td>
        <td><input class="form-control" type="number" name="license_number" placeholder="Enter car license_number:"></td>
        <td><input class="form-control" type="number" name="weight" placeholder="Enter car weight:"></td>
        <td><input class="form-control" type="date" name="registration_year" placeholder="Enter car registartion year:"></td>
        
        
    </tr>
</table>
<button class="btn btn-primary" type="submit">Submit</button>      
</form>
@endsection
