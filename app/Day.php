<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model {

    protected $location = "London";
    protected $temperature = 38;
    protected $temperature_unit = "°C";
   	protected $icon = "/img/icon.png";

   	public function get_data() {

   		return array("Location: " => $this->location, "Temperature: " => $this->temperature, "Temperature unit: " => $this->temperature_unit, "Image: " => $this->icon);
   	}
}
