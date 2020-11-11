<?php use Carbon\Carbon; ?>
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
            <th>created_at</th>
            <th>car_age</th>
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
        <td>{{$car->created_at}}</td>
        <td><?php 
        $officialDate = Carbon::now();
        $date = new Carbon($car->registartion_year);
        echo $officialDate->year - $date->year;
         ?></td>
        
    </tr>
    @endforeach

</table>
@endsection

