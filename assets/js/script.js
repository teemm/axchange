$(function(){
	$(".fa-chevron-down").on('click',function(){
		// $(".hidelist").not(this).slideUp("slow");
		$(this).addClass("fa-chevron-up").toggleClass("fa-chevron-down").parent("li").find("ul").slideToggle("slow");
	});
});