<?php
	session_start();
?>
<html>
	<head>
		<title>Acceso</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Realizo la ocnexión al a Base de Datos
			include("conexion.php");
			$conexion=Conectarse();
			
			//Recojo los valores introducidos por el usuario en el formulario de acceso
			$usr = $_POST["'usr'"];
			$pwd = $_POST["'pwd'"];

			//Ejecuto la consulta para validar que exista coincidencia con el usuario y contraseña indicados
			$resultado=mysqli_query($conexion,"SELECT IdUsuario,usuario FROM usuarios WHERE usuario='$usr' AND contrasena='$pwd'");	
			//Si la consulta me devuelve VERDADERO, procedo a mostrar la bienvenida
			if($registro = mysqli_fetch_row($resultado))
			{
				$_SESSION["IdUsuario"] = $registro[0];
				?>
				<div class="jumbotron">
					<h1 class="display-4" style="text-align:center;">Bienvenid@ <?php echo strtoupper($registro[1]); ?> a la base de datos <span class="badge badge-secondary">Hayas MUN</span></h1>
					<p class="lead">...</p>
					<hr class="my-4">
				</div>
				
			<?php
			}
			//Si la consulta devuelve FALSO, muestro el mensaje y redirecciono nuevamente al formulario inicial
			else
			{
				echo "
				<script> 
					alert('Favor de revisar contraseña');
					location.href = './';
				</script>
				";
			}
			//Cierro la conexión actual
			mysqli_close($conexion);
		?>
		
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>