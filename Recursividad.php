<?php 
/*Desarrollar en PHP el calculo de un factorial usando recursividad
Desarrollar Tablas de multiplicar recursivo en PHP. paso el numero y me retorna tablas de multiplicar del 1 al 10*/

function factorial($numero){
	$n = $numero;
	if ($n <= 0) {
		return 1;
	} else {
		return $n * factorial($n - 1);
	}
}

echo "El factorial de su número es: ".factorial(5);

function multiplicar($tabla, $numeroVeces){
	$n = $numeroVeces;
	$t = $tabla;
	if($n > 1){
        multiplicar($t, $n-1);
    }        
    echo "<br>". $t . " x " . $n . " = " . ($t * $n) ;
}

multiplicar(9,10);

?>