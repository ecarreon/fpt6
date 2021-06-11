<?php
	session_start();
	if( ! isset($_SESSION["IdUsuario"]) )
	{
		echo "Por favor inicie sesión";
		header('Location: ../../index.html');
		return;
	}
?>

<html>
	<head>
		<title>MUN - Registro</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body style="background-color:#45B39D;">
		<H1>Registro</H1>
		<div class="container">
			<form action="datos.php" method="POST">
			
				<div class="row">
					<div class="col-13">
					
						<fieldset>
							<legend>Datos Personales</legend>
								<table>
									<td> <strong>Nombre:</strong> <input type="text" class="form-control mr-5" name="Nombre" required> </td> 
									<td> <strong>Apellido Paterno:</strong> <input type="text" class="form-control mr-5" name="Apat" required> </td>
									<td> <strong>Apellido Materno:</strong> <input type="text" class="form-control mr-5" name="Amat" required> <td>
								</table>
								<table>
									<td> <strong>Escuela:</strong> <input type="text" class="form-control mr-5" name="Escuela" required> </td>
									<td> <strong>Correo:</strong> <input type="email" class="form-control mr-5" name="Correo" required> </td>
									<td> <strong>Número telefónico:</strong> <input type="tel" placeholder="1234567890" class="form-control mr-5" name="Numero" required> </td>
								</table>
						</fieldset>
						
					</div>
				</div>
				
				<br>

				<div class="row">
					<div class="col-13"> 
					<legend>Usuario</legend>
						<div class="form-group">
							<label for=""> <strong>Usuario</strong> </label>
							<input type="text" class="form-control mr-5" name="Usuario" required>
						</div>
						<div class="form-group">
							<label for=""> <strong>Contraseña</strong> </label>
							
							<class="first-example">
							<input type="password" class="form-control mr-5" name="Contrasena" id="password" required>
							<input type="checkbox" onchange="document.getElementById('password').type = this.checked ? 'text' : 'password'"> Mostrar contraseña

						</div>
					</div>
				</div>
				
				<a class="btn btn-primary" href="../../index.html" role="button">Cancelar</a>
				<input class="btn btn-success text-right" type="submit" value="Guardar">
			</form>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	</body>
</html>