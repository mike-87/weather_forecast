function Fehfunc(){

var temp_qty = document.getElementById("temp").innerHTML;
var temp_unit = document.getElementById("unit").innerHTML;

if (temp_unit === "°C") {
	var fah = (temp_qty * 9/5) + 32;
	document.getElementById("temp").innerHTML = Math.round(fah);
	document.getElementById("unit").innerHTML = "°F";
	document.getElementById("toggle").innerHTML = "Temperature in °C";
} else if (temp_unit === "°F") {
	var cel = (temp_qty - 32) * 5/9;
	document.getElementById("temp").innerHTML = Math.round(cel);
	document.getElementById("unit").innerHTML = "°C";
	document.getElementById("toggle").innerHTML = "Temperature in °F";
}

}