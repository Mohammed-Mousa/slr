$(document).ready(function () {

	

	new WOW().init();

	var year = new Date().getFullYear();
	$("#year").text(year);


	$("#cover").fadeOut();
	$("#body").css("opacity", "1")



}); //End ready() ==> End Code JQuery