@extends('layout')

@section('title', 'Weather Forecast')

@section('content')

    <h1>Weather Forecast</h1>

    <div id="widget-main">
    	<div id="location"><p> &#128392; {{$data->get_location()}} </p></div>
    	<div id="temperature"><p>{{$data->get_temperature_c()}} </p></div>
    	<div id="icon"><p> <img src="{{$data->get_icon()}}" alt="weather_icon" width="50%"> </p></div>
	</div>

@endsection