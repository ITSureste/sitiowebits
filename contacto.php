<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Contactanos</title>
	<link rel="stylesheet" media="screen" href="estilo.css" >
</head>
<body>
<div id="contacto">
<form class="formulario_cnt" action="#" method="post">
    <ul>
        <li>
             <h2>Contáctanos</h2>
        </li>
        <li>
            <label for="name">Nombre:</label>
            <input type="text"  placeholder="Enrique Uicab Cocom" required />
        </li>
        <li>
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="juicab@ejemplo.com" required />
        </li>
		<li>
            <label for="telefono">Telefono:</label>
            <input type="tel" name="telefono" placeholder="ex. (999) 999-9999" required />
        </li>
        <li>
            <label for="servicio">Servicio Requerido:</label>
            <input type="text" name="servicio" placeholder="Diseño web" required />
        </li>
        <li>
            <label for="Mensaje">Mensaje:</label>
            <textarea name="Mensaje" cols="40" rows="6" required ></textarea>
        </li>
		<li>
            <label for="name">Hora:</label>
            <input type="time"  placeholder="" required />
        </li>
        <li>
        	<button class="submit" type="submit">Enviar</button>
        </li>
    </ul>
</form>
<span >Contactanos</span>
</div>

</body>
</html>

