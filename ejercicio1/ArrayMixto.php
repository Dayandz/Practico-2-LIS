<!DOCTYPE html>
<html>
<head>
	<title>ArrayMixto</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
<body>
	<h3 class="text-center"> Array Mixto</h3>
		<div class="container">
		<div class="content">
<?php
	//Declaracion del Array Idioma:
	$Idioma = array('Ingles', 'Frances', 'Aleman', 'Ruso', 'Chino');
	//--------------------------------------------------------------------------------------------------
	//Declaracion de Nivel Basico:
	$Nivel['Basico'] = array(25, 10, 8, 12, 30);
	//--------------------------------------------------------------------------------------------------
	//Declaracion de Nivel Intermedio:
	$Nivel['Intermedio'] = array(15, 5, 4, 8, 15);
	//--------------------------------------------------------------------------------------------------
	//Declaracion de Nivel Avanzado:
	$Nivel['Avanzado'] = array(10, 2, 1, 4, 10);
	//--------------------------------------------------------------------------------------------------
	//Muestra en Pantalla:
	for ($i=0; $i < 5; $i++)
	{ 
		# code...
		/*echo 'En '.$Idioma[$i].' en el nivel Básico hay '.$Nivel['Basico'][$i]. ' alumnos matriculados.<br/>';
		echo 'En '.$Idioma[$i].' en el nivel Intermedio hay '.$Nivel['Intermedio'][$i]. ' alumnos matriculados.<br/>';
    	echo 'En '.$Idioma[$i].' en el nivel Avanzado hay '.$Nivel['Avanzado'][$i]. ' alumnos matriculados.<br/>';
    	*/
    	echo"
	    <table class=\"table table-striped\">
		<thead class=\"thead-dark\">
		<tr>\n
		<th>Idioma</th>\n
		<th>Nivel</th>\n
		<th>Alumnos</th>\n
		</tr>
		</thead>
		<tr>	
			<td>".$Idioma[$i]."</td>
			<td> Basico </td>
			<td>".$Nivel['Basico'][$i]."</td>
		</tr>
		";
		 echo"
		<tr>	
			<td>".$Idioma[$i]."</td>
			<td> Intermedio</td>
			<td>".$Nivel['Intermedio'][$i]."</td>
		</tr>
		";
		 echo"
		<tr>	
			<td>".$Idioma[$i]."</td>
			<td> Avanzado </td>
			<td>".$Nivel['Avanzado'][$i]."</td>
		</tr>
		<br>
		";
	}
?>
</div>
</div>
</body>
</html>