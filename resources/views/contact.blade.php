@extends('layouts.main')

@section('title',$title ?? 'No title')
@section('textColor',$textColor)
@section('content')

<h1>You Want To contact Someone?</h1>
@if($footerController === True)
    @section('footer',$footerText)
@endif

@endsection