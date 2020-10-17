@extends('layouts.main')

@section('title',$title ?? 'No title')
@section('textColor',$textColor)
@section('content')

<h1>The Beauty Of Life</h1>
@if($footerController === True)
    @section('footer',$footerText)
@else
    <p>Footer Is Hidden because FooterControler is False</p>
@endif
  

@endsection