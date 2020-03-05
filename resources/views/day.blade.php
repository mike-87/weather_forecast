@extends('layout')

@section('title', 'Weather Forecast')

@section('content')

    <h1>Weather Forecast</h1>
    <div id="main">

	        <p> Location: &#xf041; {{$data->get_location()}} </p>
	        <p> Temperature: {{$data->get_temperature_c()}} </p>
	        <p> <img src="{{$data->get_icon()}}" alt="weather_icon" width="30%"> </p>
	    
	</div>

@endsection