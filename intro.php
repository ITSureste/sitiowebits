<!DOCTYPE html>
<html>
	<head>
		<title>Bienvenido a ITSureste</title>
		<link rel="stylesheet" href="css/intro.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	</head>
	<body>
		<div class="content"><h1>aqui debe cargar el index..las imagenes que estan al inicio son ilustrativas hare un diseño de ITSureste.</h1></div>
		<div class="leftdoor"></div>
		<div class="rightdoor"></div>
		<a class="button"> 
			<span>Entra</span>
		</a>
		<script>
			$('.button').mousedown(function(){
			    $(this).addClass("rotate");
			    setTimeout(function(){
			        $('.button').addClass("del");
			    },1900);
			    $('.leftdoor').addClass("moveleft");
			    $('.rightdoor').addClass("moveright");
			    setTimeout(function(){
			        $('.rightdoor').addClass("del");
			    },4000);
			});
		</script>
	</body>
</html>

