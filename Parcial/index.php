<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>sesion</title>
		<!-- Asignar hoja de estilos -->
		<link href="Estilos/loginice.css" 
			 rel="stylesheet" 
			 type="text/css" />
		
	</head>
	
	<body background="imagenes/comunicar.jpg">
            <form action="Negocios/postlogin.php" method="post">
            
	<div class="fondo encabezadoLogin">
		<table>
			<tbody>  <!--cuerpo de la tabla -->
				<tr>  <!--fila -->
					<td>  <!--columna -->
						Correo Electr&oacute;nico <br />
						<input type="text" name="usuario" id="usuario" /><br />
						<input type="checkbox" id="noCerrarSesion" />
						No cerrar sesi&oacute;n
					</td>
					<td>
						Contrase&ntilde;a<br />
						<input type="password" name="password" id="pass" /><br />
						¿Olvidaste tu contrase&ntilde;a?
					</td>
					<td>
						<input type="submit" 
							   id="btnLogin" 
							   value="Iniciar Sesi&oacute;n" />
			   
					</td>
				</tr>
			</tbody>
		</table>
			   
	</div>
	</form>
	</body>
</html>