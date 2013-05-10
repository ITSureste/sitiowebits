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
	
	$("#redSocFacebook").click(function(){ // RedSocial-> FaceBook
		$("#asideFacebook").slideToggle('slow');
	});
	
	$("#redSocTwitter").click(function(){  // RedSocial-> Twitter
		$("#asideTwitter").slideToggle('slow');
	});
	
	$("#redSocGoogle").click(function(){  // RedSocial-> Google
		$("#asideGoogle").slideToggle('slow');
	});
		
	$("#contacto span").click(function(){ // CONTACTANOS	
		$("#contacto form").slideToggle('slow');
		$(this).toggleClass("contactoOut");		
	});
	
	
});	