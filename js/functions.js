$(document).ready(function(){
					
	$(".navShow").each(function(){					
		
		var id = $(this).attr("id");
		
		$("#"+id).click(function(){						
										
			$(".navShow").removeClass('navShowActive');
						
			$(this).addClass('navShowActive');
			
			//$("nav").mouseleave(function(){
			//	$(".navChildren").hide("fast");	
			//	$(".navShow").removeClass('navShowActive');
			//});
		});								
	});	
	
	$("#redSocFacebook").click(function(){		
		$("#asideFacebook").slideToggle('slow');
	});
	
	$("#redSocTwitter").click(function(){
		$("#asideTwitter").slideToggle('slow');
	});
	
});	