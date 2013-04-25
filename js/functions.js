$(document).ready(function(){
					
	$(".navShow").each(function(){					
		
		var id = $(this).attr("id");
		
		$("#"+id).click(function(){						
			
			$(".navChildren").hide("fast");						
			$(".navShow").removeClass('navShowActive');
			
			$(this).next().slideDown(1000);
			$(this).addClass('navShowActive');
			
			$("nav").mouseleave(function(){
				$(".navChildren").hide("fast");	
				$(".navShow").removeClass('navShowActive');
			});
		});								
	});							
	
});	