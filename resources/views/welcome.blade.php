@extends('layout')

@section('title', 'Weather Forecast')

@section('content')

    <h1>Weather Forecast</h1>
    <div id="main">
	    

	        @foreach ($sets as $key => $value)
	           <p> {{ $key . ": " . $value}} </p>
	        @endforeach
	    
	</div>

@endsection