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
		<title>MUN - Comites</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	</head>
	
	
	<body style="background-color:#4A235A;">
		<H1><font color="white">Registro</font></H1>
		<div class="container">
			<form action="delegaciones.php" method="POST">
			
				<div class="row">
					<div class="col-13">
					
						<fieldset>
							<legend><font color="white">Comites</font></legend>
								<table>
									<td> <a class="btn btn-outline-light" href="Comites/GeneralA.php" role="button">General Assembly</a> </td>
									<td> <a class="btn btn-outline-light" href="Comites/unWomen.php" role="button">U. N. Women</a> </td>
									<td> <a class="btn btn-outline-light" href="Comites/ComiteOi.php" role="button">Comite Olimpico Internacional</a> <td> 
								</table>
								
								<br>
								
								<table>
									<td> <a class="btn btn-outline-light" href="Comites/ClimateCC.php" role="button">Climate Change Convention</a> </td>
									<td> <a class="btn btn-outline-light" href="Comites/OrganizacionMTU.php" role="button">Organizacion Mundial de Turismo</a> </td>
								</table>
								
								<br>
								
								<table>
									<td> <a class="btn btn-outline-light" href="Comites/Unicef.php" role="button">Unicef</a> </td>
									<td> <a class="btn btn-outline-light" href="Comites/OrganizacionIM.php" role="button">Organización Internacional para las Migraciones</a> </td>
								</table>
						</fieldset>
						
					</div>
				</div>
			</form>
		</div>
		
		
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

	</body>
</html>