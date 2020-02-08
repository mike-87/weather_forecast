@extends('layout')

@section('title', 'Weather Forecast')

@section('content')

    <h1>Weather Forecast</h1>
    <div id="main">
	    
    		<img src="/img/icon.png" width="15%">
	        @foreach ($weather as $key => $value)
	           <p> {{ $key . ": " . $value}} </p>
	        @endforeach
	    
	</div>

@endsection