<!DOCTYPE hmtl>
<html>
	<head>
		<meta charset="UTF-8">
		<title>IT SURESTE</title>

<?php include "files.php" ?>

	<link rel="stylesheet" href="css/carrusel.css" />

	</head>

	<body id="inicio">

		<?php include "header.php"?>

		<div id="contenedor">

			<div class="efecto"></div>			
			<div id="contenedorDatos">
				<section style="width:100%;">

		<!----- inicia carrusel ----->		
	<section>
	<section id="slideshow">
		<div class="container">
			<div class="c_slider"></div>
			<div class="slider">
				<figure>
					<img src="img/dummy-640x310-1.jpg" alt="" width="740" height="310" />
					<figcaption>The mirror of soul</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-2.jpg" alt="" width="740" height="310" />
					<figcaption>Let's cross that bridge when we come to it</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-3.jpg" alt="" width="740" height="310" />
					<figcaption>Sushi<em>(do)</em> time</figcaption>
				</figure><!--
				--><figure>
					<img src="img/dummy-640x310-4.jpg" alt="" width="740" height="310" />
					<figcaption>Waking Life</figcaption>
				</figure>
			</div>
		</div>
		
		<span id="timeline"></span>

		<ul class="dots_commands"><!--
			<ul class="dots_commands"><!--
			--><li><a title="Show slide 1" href="#sl_i1"></a></li><!--
			--><li><a title="Show slide 2" href="#sl_i2"></a></li><!--
			--><li><a title="Show slide 3" href="#sl_i3"></a></li><!--
			--><li><a title="Show slide 4" href="#sl_i4"></a></li>
			</ul>
	</section></section>
					<!----- fin del carrusel----->

		 <!----- inicia contenido de Home ----->
				<section>

					<span>Hello section</span>
					<article id="art1">
						<p style="padding:10px;">					
							Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
							Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
							cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una 
							galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
							No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, 
							quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", 
							las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición,
							como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.												
						</p>
					</article>
					<article id="art2">
						<p style="padding:10px;">					
							Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. 
							Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500,
							cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una 
							galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen.
							No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, 
							quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", 
							las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición,
							como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.												
						</p>
					</article>
				</section>
					
					<!----- fin del contenido de home----->

		<!----- inicia widget de facebook ----->
				
				 <aside>
					<iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FInnovaciones-Tecnol%25C3%25B3gicas-del-Sureste%2F471016546305070%3Fref%3Dstream&amp;width=250&amp;height=290&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:250px; height:290px;" allowTransparency="true">
					</iframe>
				</aside>
					<!----- fin del widget de facebook ----->

		<!----- inicia widget de twitter ----->
				
				<aside>
					<a class="twitter-timeline" href="https://twitter.com/ITSureste" data-widget-id="329369625756311552">Tweets por @ITSureste</a>
						<script>
							!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
								if(!d.getElementById(id)){
								js=d.createElement(s);
								js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
								fjs.parentNode.insertBefore(js,fjs);
							}}(document,"script","twitter-wjs");
						</script>
				</aside>

				<!----- fin del widget de twitter ----->
	
	
				<?php include "footer.php" ?>
			</div>	
		</div>
	</body>
</html>