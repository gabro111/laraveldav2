@extends('layouts.main')

@section('title',$title ?? 'No title')
@section('textColor',$textColor)
@section('content')

<h1>The About Page</h1>
@if($footerController)
    @section('footer',$footerText)
@else
  <p>Footer Is Hidden because FooterControler is</p>
@endif

@endsection