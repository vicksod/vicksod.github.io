menu.onclick = function myFunction() {
	var x = document.getElementById('myTopnav')

	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}

$(document).ready(function(){
  $(".owl-carousel").owlCarousel({
  	loop:true,
    responsive:{
        0:{
            items:1
        },
        628:{
            items:2
        },
        940:{
        	items:3
        },
        1260:{
            items:4
        },
    }
  });
});
