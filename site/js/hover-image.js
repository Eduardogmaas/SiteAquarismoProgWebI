$(function(){
	// lightbox image
	$(".photo .img_wrap").append("<span></span>");
	
	$(".photo .img_wrap").hover(function(){
		$(this).find("img").stop().animate({opacity:0.5}, "normal")
	}, function(){
		$(this).find("img").stop().animate({opacity:1}, "normal")
	});
});