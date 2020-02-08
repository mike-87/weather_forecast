<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Weather_Controller extends Controller
{
    public function home(){

    	$sets = array('Temperatura' => '33°C', 'Jačina vetra' => '3 km/h', 'Vlažnost vazduha' => '98%');

    	return view ('welcome', ['sets' => $sets]);
    }
}
