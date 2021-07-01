<html>
	<head>
		<title>Listado</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body>
		<?php
			//Realizo la ocnexión al a Base de Datos
			include("../../app/bd/conexion.php");
			$conexion=Conectarse();
			
			$consulta="SELECT* FROM registro ORDER BY idPersona";	
			//Si la consulta me devuelve VERDADERO, procedo a mostrar la bienvenida
			$resultado=mysqli_query($conexion,$consulta);
			
				?>
				<table class="table">
				<thead class="thead-dark">
				<th>Nombre</th><th>Apellidos</th><th>Delegacion</th><th>Comite</th><th>Escuela</th><th>Correo</th><th>Numero</th>
				</thead>
				<?php
			
			while($registro=mysqli_fetch_array($resultado))
			{
				?>
				<tr>
					<td><?php echo $registro['nombre'] ?> </td>
					<td><?php echo $registro['apellidos'] ?> </td>
					<td><?php echo $registro['delegacion'] ?> </td>
					<td><?php echo $registro['comite'] ?> </td>
					<td><?php echo $registro['escuela'] ?> </td>
					<td><?php echo $registro['correo'] ?> </td>
					<td><?php echo $registro['numero'] ?> </td>
				</tr>
				<?php
			}
			//Cierro la conexión actual
			mysqli_close($conexion);
		?>
	
		</table>
		<a href="index.html">Index</a>
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	</body>
</html>
