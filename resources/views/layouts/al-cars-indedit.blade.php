@extends('layouts.al-car-main')
   @section('content')

   <form action="/product/update" method="POST">
    <input type="hidden" name="id" value="{{ $cars->id}}">
    @csrf
<div class="card">
    <div class="card-header">
        <h4>Edit Cars</h4>
    </div>
    <div class="card-body">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name=name id=name value="{{ $cars->name}}">
        </div>
        <div class="form-group">
            <label for="make">Make</label>
            <input type="text" class="form-control" name=make id=make value="{{ $cars->make}}">
        </div>
        <div class="form-group">
            <label for="model">model	</label>
            <input type="text" class="form-control" name=model id=model value="{{ $cars->model}}">
        </div>
        <div class="form-group">
            <label for="license_number">license_number</label>
            <input type="number" class="form-control" name=license_number id=license_number value="{{ $cars->license_number}}">
        </div>
        <div class="form-group">
            <label for="name">weight</label>
            <input type="number" class="form-control" name=weight id=weight value="{{ $cars->weight}}">
        </div>
        <div class="form-group">
            <label for="registartion_year">registration_year</label>
            <input type="date" class="form-control" name=registartion_year id=registartion_year value="{{ $cars->registartion_year}}">
        </div>
        <div class="card-footer">
            <button class="btn btn-success">Save</button>
            <button class="btn btn-danger">Cancle</button>
        </div>
    </div>
</div>

   </form>