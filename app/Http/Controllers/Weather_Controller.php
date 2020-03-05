<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Day;

class Weather_Controller extends Controller
{
    public function home(){

    	$sets = array('Temperatura' => '33°C', 'Jačina vetra' => '3 km/h', 'Vlažnost vazduha' => '98%');

    	return view ('welcome', ['weather2' => $sets]);
    }

    public function jsonview(){

    	// $weather = array('Temperatura' => '33°C', 'Jačina vetra' => '3 km/h', 'Vlažnost vazduha' => '98%');

    	// return $weather;

    	$forecast = new Day;
    	

    	$forecast->location = "Serbia";
    	$forecast->temperature = 22;
    	$forecast->temperature_unit = "°C";
    	$forecast->icon = "some image";

    	return $forecast;
    }

    public function widgets(){

    	$forecast2 = new Day(array("location" => "London", "temperature" => 28, "temperature_unit" => "°C", "icon" => "/img/rain.svg"));

    	return view('widget', ['data' => $forecast2]);
    }

    public function widgets_api(){

    	$local_array = array("location" => "Paris", "temperature" => 27, "temperature_unit" => "°C", "icon" => "/img/rain.svg");

    	return $local_array;

    }
}
