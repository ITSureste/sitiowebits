$('.button').mousedown(function(){
	$(this).addClass("rotate"); //a�ade la clase con la transici�n al bot�n.
	setTimeout(function(){
		$('.button').addClass("del"); //A�ade la clase del al bot�n tras 1900 milisegundos.
	},1900);
	$('.leftdoor').addClass("moveleft"); //A�ade la clase con la transici�n a la puerta izq.
	$('.rightdoor').addClass("moveright"); //A�ade la clase con la transici�n a la puerta der.
	setTimeout(function(){
		$('.rightdoor').addClass("del"); //Elimina la puerta derecha tras 4 segundos.
	},4000);
});