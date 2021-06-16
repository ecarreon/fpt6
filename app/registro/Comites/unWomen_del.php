<?php
	session_start();
	if( ! isset($_SESSION["IdUsuario"]) )
	{
		echo "Por favor inicie sesión";
		header('Location: ../../../index.html');
		return;
	}
?>

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
			include("../../bd/conexion.php");
			$conexion=Conectarse();
			
			//Recojo los valores introducidos por el usuario en el formulario de ac
			$unWomen = mysqli_real_escape_string($conexion,$_POST['unWomen']);
			
			$consulta="INSERT INTO comites(unWomen,IdUsuario) VALUES('$unWomen',LAST_INSERT_ID() )";
			if(mysqli_query($conexion,$consulta))
			{
				?>
					<div class="alert alert-info" role="alert">
						Registro creado correctamente
					</div>
					
					<meta http-equiv="refresh" content="2;url=../../../index.html" />
				<?php
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