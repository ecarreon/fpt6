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
	<body style="background-color:#A9CCE3;">
		<H1>Comites</H1>
		<div class="container">
			<form action="GeneralA_del.php" method="POST">
			
				<div class="row">
					<div class="col-13">
					
						<fieldset>
							<legend>Delegaciones</legend>
								<table>
									<td> <strong>General Assembly:</strong>	
										<select name="GeneralA">
											<option value="United States">United States</option>
											<option value="Russia">Russia</option>
											<option value="United Kingdom">United Kingdom</option>
											<option value="France">France</option>
											<option value="China">China</option>
											<option value="Mexico">Mexico</option>
											<option value="Canada">Canada</option>
											<option value="Brazil">Brazil</option>
											<option value="Argentina">Argentina</option>
											<option value="Spain">Spain</option>
											<option value="Italy">Italy</option>
											<option value="Germany">Germany</option>
											<option value="Japan">Japan</option>
											<option value="India">India</option>
											<option value="Israel">Israel</option>
											<option value="Turkey">Turkey</option>
											<option value="Nigeria">Nigeria</option>
											<option value="South Africa">South Africa</option>
											<option value="New Zealand">New Zealand</option>
											<option value="Australia">Australia</option>
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