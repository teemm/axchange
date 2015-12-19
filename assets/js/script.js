$(function(){
	$(".fa-chevron-down").on('click',function(){
		// $(".hidelist").slideUp("slow");
		$(this).parent("li").find("ul").slideToggle("slow");
	});
});