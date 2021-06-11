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
		<title>MUN - Comites</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	<body style="background-color:#45B39D;">
		<H1>Comites</H1>
		<div class="container">
			<form action="ClimateCC_del.php" method="POST">
			
				<div class="row">
					<div class="col-13">
					
						<fieldset>
							<legend>Delegaciones</legend>
								<table>
									<td> <strong>Climate Change Convention:</strong>	
										<select name="ClimateCC">
											<option value="Coca - Cola Company">Coca - Cola Company</option>
											<option value="Nestlé S.A.">Nestlé S.A.</option>
											<option value="Exxon Mobil Corporation">Exxon Mobil Corporation</option>
											<option value="China National Coal Group Co.,">China National Coal Group Co.,</option>
											<option value="Saudi Aramco">Saudi Aramco</option>
											<option value="PEMEX">PEMEX</option>
											<option value="Monsanto">Monsanto</option>
											<option value="Toyota">Toyota</option>
											<option value="Tesla Motors">Tesla Motors</option>
											<option value="Amazon">Amazon</option>
											<option value="Estados Unidos Mexicanos">Estados Unidos Mexicanos</option>
											<option value="Republica Popular de China">Republica Popular de China</option>
											<option value="Estados Unidos de America">Estados Unidos de America</option>
											<option value="República de la India">República de la India</option>
											<option value="Federación de Rusia">Federación de Rusia</option>
											<option value="Japón">Japón</option>
											<option value="Confederación Suiza">Confederación Suiza</option>
											<option value="Gran Ducado de Luxemburgo">Gran Ducado de Luxemburgo</option>
											<option value="República Federal de Alemania">República Federal de Alemania</option>
											<option value="Greenpeace">Greenpeace</option>
											<option value="PNUMA (Programa de las Naciones Unidas para el Medio Ambiente">PNUMA (Programa de las Naciones Unidas para el Medio Ambiente</option>
										</select>
									<td>
								</table>
						</fieldset>
							
					</div>
				</div>
				
				<br>
				
				<a class="btn btn-danger" href="../index2.php" role="button">Atras</a>
				<input class="btn btn-success text-right" type="submit" value="Guardar">
			</form>
		</div>
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	</body>
</html>