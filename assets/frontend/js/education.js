$(document).ready(function(){
	
	// Refresh page on resize 
	$(window).resize(function(){location.reload();});


	// Up Arrow Click
	$(window).on("scroll" , function(){
		if( $(window).scrollTop() >10 ){
			// $("nav").addClass("nav-shadow")
			$("#up-arrow").show()
		}else{
			// $("nav").removeClass("nav-shadow")
			$("#up-arrow").fadeOut()
		}
	})
	// Up Arrow Click
	$("#up-arrow").click(function(){
		$("body, html").animate({
			scrollTop : $("header").offset().top
		}, 2000)
	});



	// Enable Plugin Animation On Scroll (AOS)
	AOS.init({
		duration:1000 , 
		delay : 250
	})




	$(window).on("load" , function(){
		$("#cover").hide();
		$("#body").css("opacity" , "1")
	})


}); //End ready() ==> End Code JQuery  