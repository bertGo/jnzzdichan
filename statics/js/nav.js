$(function() {

 	// var winw = parseInt($(window).width());
 	// $('.menu .nav .box').css({
 	// 	// 'padding-left': (winw - 960) / 2,
 	// 	// 'padding-right': (winw - 960) / 2,
 		
 	// });

 	var navLi = $(".menu .nav li");
 	navLi.mouseover(function() {
 		$(this).find("a").addClass("current");
 		$(this).find(".box").stop().slideDown(200);
 	})
 	navLi.mouseleave(function() {
 		$(this).find("a").removeClass("current");
 		$(this).find(".box").stop().slideUp(200);
 	})
 })
