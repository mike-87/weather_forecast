<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Day;

class Weather_Controller extends Controller
{
    public function home(){

    	$sets = array('Temperatura' => '33°C', 'Jačina vetra' => '3 km/h', 'Vlažnost vazduha' => '98%');

    	return view ('welcome', ['weather' => $sets]);
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
}
