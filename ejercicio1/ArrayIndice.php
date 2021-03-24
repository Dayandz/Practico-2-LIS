<!DOCTYPE html>
<html>
<head>
	<title>ArrayIndice</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</head>
<body>
	<h3 class="text-center"> Array Indice</h3>
<?php 
	//Declaracion de los Arrays:
	$Idiomas = array('Ingles', 'Frances', 'Aleman', 'Ruso', 'Chino-Mandarin');
	//Nivel Basico:
	$Nivel['Basico'][0] = 25;
	$Nivel['Basico'][1] = 10;
	$Nivel['Basico'][2] = 8;
	$Nivel['Basico'][3] = 12;
	$Nivel['Basico'][4] = 30;
	//--------------------------------------------------------------------------------------------------
	//Nivel Intermedio:
	$Nivel['Intermedio'][0] = 15;
	$Nivel['Intermedio'][1] = 5;
	$Nivel['Intermedio'][2] = 4;
	$Nivel['Intermedio'][3] = 8;
	$Nivel['Intermedio'][4] = 15;
	//--------------------------------------------------------------------------------------------------
	//Nivel Avanzado:
	$Nivel['Avanzado'][0] = 10;
	$Nivel['Avanzado'][1] = 2;
	$Nivel['Avanzado'][2] = 1;
	$Nivel['Avanzado'][3] = 4;
	$Nivel['Avanzado'][4] = 10;
	//--------------------------------------------------------------------------------------------------
	//Muestra en Pantalla:
	
	for ($i=0; $i <= 4; $i++)
	{ 
		# code...
		/*echo 'En '.$Idiomas[$i].' en el nivel Basico hay '.$Nivel['Basico'][$i]. ' alumnos matriculados.<br/>';
	    echo 'En '.$Idiomas[$i].' en el nivel Intermedio hay '.$Nivel['Intermedio'][$i]. ' alumnos matriculados.<br/>';
	    echo 'En '.$Idiomas[$i].' en el nivel Avanzado hay '.$Nivel['Avanzado'][$i]. ' alumnos matriculados.<br/>';
		*/
	    echo"
	    <table class=\"table\">
		<thead class=\"thead-dark\">
		<tr>\n
		<th>Idioma</th>\n
		<th>Nivel</th>\n
		<th>Alumnos</th>\n
		</tr>
		<tr>	
			<td>".$Idiomas[$i]."</td>
			<td> Basico </td>
			<td>".$Nivel['Basico'][$i]."</td>
		</tr>
		";
		 echo"
		<tr>	
			<td>".$Idiomas[$i]."</td>
			<td> Intermedio</td>
			<td>".$Nivel['Intermedio'][$i]."</td>
		</tr>
		";
		 echo"
		<tr>	
			<td>".$Idiomas[$i]."</td>
			<td> Avanzado </td>
			<td>".$Nivel['Avanzado'][$i]."</td>
		</tr>
		<br>
		";
	}

?>
</body>
</html>