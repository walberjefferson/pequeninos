$(document).ready(function(){

	$(".video-lista .item").click(function(){
		var item = $(this);
		var src = item.find("iframe").attr('src');

		$(".video-area iframe").attr("src", src);
	});
	

	/*
	* Slide
	*/
	$('.slide-1').owlCarousel({
		loop:true,
		nav:true,
		autoplay: true,
		responsive:{
			0:{
				items:1
			}
		}
	});
	$('.slide-4').owlCarousel({
		loop:true,
		nav:true,
		margin:10,
		autoplay: true,
		responsive:{
			0:{
				items:2
			},
			768:{
				items:4
			}
		}
	});
	$('.owl-prev').html('<i class="fa fa-angle-left"></i>');
	$('.owl-next').html('<i class="fa fa-angle-right"></i>');

	//Menu
	$('.hamburger').click(function(e) {
        e.preventDefault();
        e.stopPropagation();
		// console.log("ok");
		$('.responsive_menu').slideToggle("slow");
	});

	//hamburgers
	var forEach=function(t,o,r){if("[object Object]"===Object.prototype.toString.call(t))for(var c in t)Object.prototype.hasOwnProperty.call(t,c)&&o.call(r,t[c],c,t);else for(var e=0,l=t.length;l>e;e++)o.call(r,t[e],e,t)};

	var hamburgers = document.querySelectorAll(".hamburger");
	if (hamburgers.length > 0) {
		forEach(hamburgers, function(hamburger) {
			hamburger.addEventListener("click", function() {
				this.classList.toggle("is-active");
			}, false);
		});
	}
	//end hamburgerss

	// $("body").mCustomScrollbar({
	// 	theme:"light-3"
	// });

	//Smooth Scroll

	// $(".scroll").click(function (event) {
	// 	event.preventDefault();
	// 	$('html,body').animate({scrollTop: $(this.hash).offset().top}, 2000,'easeInOutCirc');
	// });

});
