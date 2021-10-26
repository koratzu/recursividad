<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recursividad</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="icon" href="imagenes/favicon.ico">
</head>
<body>
	<div class="site-branding">
		<h1 class="site-title"><a href="index.php" rel="home" alt="Recursividad">Recursividad en Factoriales y Tablas de Multiplicar</a></h1>
		<h2 class="site-subtitle">By Daniel Bernal</h2>
	</div>

	<div class="site-body">
		<form action="index.php" method="post" class="met1">
			<h2>Factorial de N</h2>
			<fieldset>
				<input class="registro" type="text" name="numeroN" placeholder=" INSERTE EL VALOR DE N " style="margin-left:80%">
			</fieldset>
			<input type="submit" name="FN" value="Mostrar Factorial" class="run">
			<br><br><br>
			<?php 
			if (isset($_POST['FN'])) {
				if (isset($_POST['numeroN'])) {
					function factorial($numero){
						$n = $numero;
						if ($n <= 0) {
							return 1;
						} else {
							return $n * factorial($n - 1);
						}
					}
					echo "El factorial de su número es: ".factorial($_POST['numeroN']);
				}
			}			
			?>
		</form>

		<form action="index.php" method="post" class="met2">
			<h2>Tabla de Multiplicar de N</h2>
			<fieldset>
				<input class="registro" type="text" name="numeroT" placeholder=" INSERTE EL VALOR DE N" style="margin-left:80%">
			</fieldset>
			<fieldset>
				<input class="registro" type="text" name="cantidadT" placeholder=" NUMERO EXTENSION DE LA TABLA " style="margin-left:80%">
			</fieldset>
			<input type="submit" name="TM" value="Mostrar Tabla" class="run">
			<br><br>
			<?php 
			if (isset($_POST['TM'])) {
				if (isset($_POST['numeroT']) and isset($_POST['cantidadT'])) {
					function multiplicar($tabla, $numeroVeces){
						$n = $numeroVeces;
						$t = $tabla;
						if($n > 1){
					        multiplicar($t, $n-1);
					    }        
					    echo "<br>". $t . " x " . $n . " = " . ($t * $n) ;
					}
					multiplicar($_POST['numeroT'],$_POST['cantidadT']);
				}
			}
			?>
		</form>
	</div>
</body>
</html>

