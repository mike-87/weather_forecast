<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model {

    protected $location;
    protected $temperature;
    protected $temperature_unit;
   	protected $icon;
   	protected $date;

   	public function __construct(array $data){
   		$this->location = $data['location'];
   		$this->temperature = $data['temperature'];
   		$this->temperature_unit = $data['temperature_unit'];
   		$this->icon = $data['icon'];
   	}

   	public function get_data() {

   		return array("Location" => $this->location, "Temperature" => $this->temperature, "Temperature unit" => $this->temperature_unit, "Image" => $this->icon);
   	}

   	public function get_location() {
   		return $this->location;
   	}

   	public function get_temperature_c() {
   		return $this->temperature;
   	}

   	public function get_temperature_unit(){
   		return $this->temperature_unit;
   	}

   	public function get_icon() {
   		return $this->icon;
   	}

   	public function date_today() {
   		return $this->date = date('d.m.Y.');
   	}
}
