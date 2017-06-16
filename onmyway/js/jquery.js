$(function(){
	$("#month a").mouseover(function(){
		var index = $(this).index();
		index = index/2;
		$("#month a").eq(index).css("color","blue").siblings().css("color","#333");
		$("#month a").eq(index).css("border-bottom","3px solid blue").siblings().css("border-bottom","none");
		$(".m-list").eq(index).css({"visibility":"visible"}).siblings("div").css({"visibility":"hidden"});
	})
   $("#ttheme a").mouseover(function(){
   		var index = $(this).index();
		index = index/2;
		$("#ttheme a").eq(index).css("color","blue").siblings().css("color","#333");
		$("#ttheme a").eq(index).css("border-bottom","3px solid blue").siblings().css("border-bottom","none");
   })
	$("#s a").mouseover(function(){
		var index = $(this).index();
		index = index/2;
		$("#s a").eq(index).css("color","blue").siblings().css("color","#333");
		$("#s a").eq(index).css("border-bottom","3px solid blue").siblings().css("border-bottom","none");
		$(".hot-list").eq(index).css("visibility","visible").siblings().css("visibility","hidden");
	
	})
	$("#detd").click(function(){
		if($("#sub-menu").css("visibility") == "hidden"){
			$("#sub-menu").css({"visibility":"visible","display":"block"});
		}
		else{
			$("#sub-menu").css({"visibility":"hidden","display":"none"});
		}
	})
		
})