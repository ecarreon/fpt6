<html>
	<head>
		<title>Inserción</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Realizo la conexión al a Base de Datos

			include("conexion.php");
			
			$conexion=Conectarse();
			
			
			$comite = mysqli_real_escape_string($conexion,$_POST['comite']);
			$delegacion = mysqli_real_escape_string($conexion,$_POST['delegacion']);
			
			
			$consulta="UPDATE registro SET comite = '$comite', delegacion = '$delegacion' WHERE idPersona=11;";
			if(mysqli_query($conexion,$consulta))
					{
							?>
								<div class="alert alert-info" role="alert">
									Registro creado correctamente
								</div>
								
								<meta http-equiv="refresh" content="2;url=listar.php"/>
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