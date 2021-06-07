

<html>
	<head>
		<title>Inserción</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Realizo la ocnexión al a Base de Datos
			include("conexion.php");
			$conexion=Conectarse();
			
			//Recojo los valores introducidos por el usuario en el formulario de ac
			$Nombre = mysqli_real_escape_string($conexion,$_POST['Nombre']);
			$Apat = mysqli_real_escape_string($conexion,$_POST['Apat']);
			$Amat = mysqli_real_escape_string($conexion,$_POST['Amat']);
			$Escuela = mysqli_real_escape_string($conexion,$_POST['Escuela']);
			$Correo = mysqli_real_escape_string($conexion,$_POST['Correo']);
			$Numero = mysqli_real_escape_string($conexion,$_POST['Numero']);
			$Usuario = mysqli_real_escape_string($conexion,$_POST['Usuario']);
			$Contrasena = mysqli_real_escape_string($conexion,$_POST['Contrasena']);
			
			$consulta="INSERT INTO usuarios(Usuario,Contrasena) VALUES('$Usuario','$Contrasena')";
			if(mysqli_query($conexion,$consulta))
			{
				$consulta2="INSERT INTO registro(Nombre,Apat,Amat,Escuela,Correo,Numero,IdUsuario)VALUES('$Nombre','$Apat','$Amat','$Escuela','$Correo','$Numero',LAST_INSERT_ID() )";
				if(mysqli_query($conexion,$consulta2))
				{
					?>
						<div class="alert alert-info" role="alert">
							Registro creado correctamente
						</div>
						
						<meta http-equiv="refresh" content="2;url=index2.php" />
					<?php
				}
			}
			else
			{
				?>
					<div class="alert alert-danger" role="alert">
						Error al guardar
					</div>
				<?php
			}

			//Cierro la conexión actual
			mysqli_close($conexion);
		?>
		
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>