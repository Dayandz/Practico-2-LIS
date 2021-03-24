<?php
	//Declaracion de Array con los Array anidados:
	$Idiomas = array(
		'Ingles' => array(
			'Basico' => 25, 
			'Intermedio' => 15,
			'Avanzado' => 10
		),//Fin Array de Ingles
		'Frances' => array(
			'Basico' => 10,
			'Intermedio' => 5,
			'Avanzado' => 2
		),//Fin Array de Frances
		'Aleman' => array(
			'Basico' => 8,
			'Intermedio' => 4,
			'Avanzado' => 1
		),//Fin Array de Aleman
		'Ruso' => array(
			'Basico' => 12,
			'Intermedio' => 8,
			'Avanzado' => 4
		),//Fin Array de Ruso
		'Chino-Mandarin' => array(
			'Basico' => 30,
			'Intermedio' => 15,
			'Avanzado' => 10)//Fin Array de Mandarinn 
	);//Fin Array Principal
	//--------------------------------------------------------------------------------------------------
	//Creacion de la Pagina Web:
	echo "<!DOCTYPE html>";
	echo "<html>";
	echo "<head>";
		echo "<meta charset=\"utf-8\" />";
		echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">';
		echo '<script src="https://ajax.googleapis.com/aja/libs/jquery/3.4.1/jquery.min.js"></script>';
		echo '<script src="https://maxcdn.bootstrap.com/bootstrap/3.4.1/js.bo.min.js"></script>';
		echo "<title>Array Anidado</title>";
	echo "</head>";
	echo "<body>";
		echo "<div class='container'>";
			echo "<header class='navbar navbar-light bg-light text-center'>";
				echo "<a class='navbar-brand' class='d-inline-block align-top ' href='#'>";
					echo "	Array Anidado ";
				echo "</a>";
			echo "</header>";
			foreach ($Idiomas as $Idioma => $Nivel)
			{
				# code...
				echo "<table class='table table-bordered'>";
					echo "<thead>";
						echo "<tr class='bg-secondary'>";
							echo "<th scope='col' colspan='2' class='text-center'>" . $Idioma . "</th>";
						echo "</tr>";
						echo "<tr class='bg-success'>";
							echo "<th scope='col'>Nivel</th>";
							echo "<th scope='col'>Alumnos</th>";
						echo "</tr>";
					echo "</thead>";
					echo "<tbody>";
						foreach($Nivel as $Estudiante => $Valor)
								{
									echo "<tr>";
										echo "<td>Nivel</td>";
										echo "<td>". number_format($Valor, 1, '.', ',')."</td>";
									echo "</tr>";
								}
					echo "</tbody>";
				echo "</table>";
			}
		echo "</div>";
	echo "</body>";
	echo "</html>";
?>