<!DOCTYPE hmtl>
<html>
	<head>
		<meta charset="UTF-8">
		<title>IT SURESTE</title>
		<link rel="stylesheet" href="css/estilo.css" />
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/functions.js"></script>
	</head>
	<body>
		<div id="container">
			<header>
				<figure>
					<a href="index.php">
						<img src="img/logo.png" />
					</a>
					<!--<figcaption>Aqui va el slogan</figcaption>-->
				</figure>				
				<nav id="navigation">				
					<ul>
						<li>
							<a id="idIndex" href="index.php">Inicio</a>
						</li>
						<li>
							<a id="idServicio" class="navShow">Servicios</a>
							<div class="navChildren">
								<div class="navChildrenNext">
									Servicios
								</div>
							</div>
						</li>
						<li>
							<a id="idNosotros" class="navShow">Nosotros</a>
							<div class="navChildren">
								<div class="navChildrenNext">
									Nosotros
								</div>
							</div>
						</li>
						<li>
							<a id="idContacto" class="navShow">Contactanos</a>
							<div class="navChildren">								
								<div class="navChildrenNext">
									Contactanos
								</div>
							</div>
						</li>
					</ul>					
				</nav>
				<div class="clean"></div>
			</header>
			
			<section>
				<span>Hello section</span>
				<article id="art1"> Hello Article 1</article>
				<article id="art2"> Hello Article 2</article>
			</section>
				
			<aside>
				Hello Aside
				<p>
					PMSA: Dejenme el header ya mero lo tengo XD
					<br/> 
					<br/> 
					Al parecer hay un detalle con el "nav" en el IE9, chrome y firefox running.
					<br/>
					<br/>
					Hora entrada: 10:15pm<br/>
					Hora salida: 2:00am													
				</p>
			</aside>
			
			<footer>
				<nav>
					<ul>
						<li><a href="#">Mapa del Sitio</a></li>
					</ul>
				</nav>
			</footer>
		</div>
	</body>
</html>