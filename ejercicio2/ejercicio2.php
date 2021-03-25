<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--<style>
		.abs-center{display: flex;  align-items: center;justify-content: center;}

	</style>-->
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<title>Ejercicio 2</title>
</head>
<body>	
	<div class="container">
		<div class="limiter">
		<div class="card ">
			<div class="card-header text-center">
				<h3 class="card-title">Biblioteca Rafael Meza Ayau</h3>
			</div>
			<div class="card-body">
				<form method="POST" class="form-center">
					<div class="container">
		<!-------------------------------------------------------------------------------------------------->
					<div class="form-group col-md-12">
						<label class="control-label"> Autor</label>
        				<input type="text" name="Autor" id="Autor" placeholder="Apellido Nombre" class="form-control" autofocus="">
        			</div>
        <!-------------------------------------------------------------------------------------------------->
       				<div class="form-group col-md-12">
       					<label class="control-label col-md-5"> Título del Libro:</label>
        				<input type="text" name="Titulo" id="Titulo" placeholder="Titulo del libro" class="form-control" required>
       				</div> 
        <!-------------------------------------------------------------------------------------------------->
			    	<div class="form-group col-md-12">
			     		<label class="control-label ">Número de Edicion:</label>
			        	<input type="number" name="NumEdi" id="NumEdi" placeholder="No. Edicion" class="form-control">
			        </div>
        <!-------------------------------------------------------------------------------------------------->
        			<div class="form-group col-md-12" >
        				<label class="control-label">Lugar de Publicación:</label>
        				<input type="text" name="Lugar" id="Lugar" placeholder="Ciudad" class="form-control">
        			</div>
        <!-------------------------------------------------------------------------------------------------->
       				<div class="form-group col-md-12" >
        				<label class="control-label">Editorial:</label>
        				<input type="text" name="Editorial" id="Editorial" placeholder="Editorial" class="form-control">
        			</div>
        <!-------------------------------------------------------------------------------------------------->
        			<div class="form-group col-md-12">
        				<label class="control-label">Año de Edicion:</label>
        				<input type="number" name="Año" id="Año" placeholder=" ex: 2021" class="form-control">
        			</div>
        	
        <!-------------------------------------------------------------------------------------------------->
        			<div class="form-group col-md-12">
						<label class="control-label" for="notaseditorial">Notas de editorial</label>
						<textarea class="form-control" id="Nota" name="Nota" placeholder="Notas"></textarea>
					</div>
        <!-------------------------------------------------------------------------------------------------->
        			<div class="form-group col-md-12">
        				<label class="col-md-3 control-label" for="textinput">ISBN</label>
        				<div>
        					<input  type="number" id="ISBN" name="ISBN" placeholder="(0000000000000) es de 13 números"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="13" class="form-control input-md">
        				</div>  
        			</div>     	
        <!-------------------------------------------------------------------------------------------------->
        			</div>
        			<div class="card-footer text-center">
						<div class="form-group">
        					<input type="submit" class="btn btn-lg btn-info text-white"  name="enviar" id="enviar" value="enviar">
        				</div>
					</div>
				</form>
			</div>
		</div><!--fin de card-->
		</div>
	</div><!--fin de container-->
<br>
<!--------------------------------------el card conde apareceran los libros----------------------------------->
	<div class="content">
		<div class="container">
			<div class="card">
				<div class="card-header text-center">
					<div class="card-title"><h4>Libros</h4></div>
				</div>
				<div class="card-body">
					<form>
						<table class="table ">
							<!-------Aqui se deberá mostrar una tabla que contenga los n libros que quiere la maitra :v ----------->
							<thead class="thead-dark">
								<tr>
									<th>Autor</th>	
									<th>Titulo</th>	
									<th>No. Edicion</th>	
									<th>Ciudad</th>	
									<th>Editorial</th>
									<th>Año</th>	
									<th>Notas</th>	
									<th>ISBN</th>	
								</tr>
							</thead>							
							<tbody>												
								<?php
									if(isset($_POST['enviar']))
									{
									/****************************************************************************/
										$autor=isset($_POST['Autor'])? $_POST['Autor']:"";
										$titulo= $_POST['Titulo'];										
										$noedi=$_POST['NumEdi'];
										$ciudad=$_POST['Lugar'];
										$editorial= $_POST['Editorial'];
										$año= $_POST['Año'];
										$nota= $_POST['Nota'];
										$isbn= $_POST['ISBN'];
									/****************************************************************************/
											/********PATRONES PARA VERIFICAR***********/
										$Pletras="/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/";
										$Pnumero="/^[0-9 ]+$/";
									/****************************************************************************/
										if(preg_match($Pletras,$autor) && preg_match($Pletras, $titulo) && preg_match($Pnumero, $noedi) && preg_match($Pletras, $ciudad) && preg_match($Pletras, $editorial) && preg_match($Pnumero, $año) && preg_match($Pletras, $nota) && preg_match($Pletras, $isbn))
										{

											echo "<tr>";
												echo "<td>" . $autor . "</td>";
												echo "<td>" . $titulo . "</td>";
												echo "<td>" . $noedi . "</td>";
												echo "<td>" . $ciudad . "</td>";
												echo "<td>" . $editorial . "</td>";
												echo "<td>" . $año . "</td>";
												echo "<td>" . $nota . "</td>";
												echo "<td>" . $isbn . "</td>";
											echo "</tr>";
										}
									/****************************************************************************/
									}
								?>
							</tbody>	
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>