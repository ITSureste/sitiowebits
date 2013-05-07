$('.button').mousedown(function(){
	$(this).addClass("rotate"); //añade la clase con la transición al botón.
	setTimeout(function(){
		$('.button').addClass("del"); //Añade la clase del al botón tras 1900 milisegundos.
	},1900);
	$('.leftdoor').addClass("moveleft"); //Añade la clase con la transición a la puerta izq.
	$('.rightdoor').addClass("moveright"); //Añade la clase con la transición a la puerta der.
	setTimeout(function(){
		$('.rightdoor').addClass("del"); //Elimina la puerta derecha tras 4 segundos.
	},4000);
});