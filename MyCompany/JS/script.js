menu.onclick = function myFunction() {
	var x = document.getElementById('myTopnav')

	if (x.className === "topnav") {
		x.className += " responsive";
	} else {
		x.className = "topnav";
	}
}
var $back__to__top = $(".back__to__top")
$(window).on("scroll", function(){
	if ($(window).scrollTop() >= 20) {
		$back__to__top.fadeIn();
	}
	else{
		$back__to__top.fadeOut();
	}
});
$back__to__top.on("click", function() {
	$("html,body").animate({scrollTop:0}, 900)
});