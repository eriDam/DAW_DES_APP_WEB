<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<?php
		//todos los tipos de variables, podemos definirlas aquí
		//o fuera del body como globales, pero solo podremos 		        imprimirlas en el body
		//ENTEROS
		$numero=1;
		$NUMERO=2;
		$Numero=3;
		$numero_negativo=-50;
		
		//COMA FLOTANTE
		$decimal=2.345;
		
		//CADENAS
		$frase="Esta es una frase completa";
			
		//BOOLEAN
		$verdadero=TRUE;//Imprime 1 - False sería 0		
		
		//CONSTANTES para definir variable que no van a cambiar, se definen en MAYUSCULAS
		//Conjunto nombre-valor
		define("PI",3.14);
			
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tarea06</title>
</head>

<body>
	
	<?php
		 
		#Para imprimir por pantalla utilizamos echo
		echo "La variable numero contiene: $numero<br>";
		echo "La variable NUMERO contiene: $NUMERO<br>";
		echo "La variable Numero contiene: $Numero<br>";
	
		echo "La variable decimal contiene: $decimal<br>";
		echo "La variable frase contiene: $frase<br>";
		echo "La variable verdadero contiene: $verdadero<br><br>";
		echo "Las variables constantes se imprimen de diferente forma,<br>se concatenan con un . en lugar de con un + y no se pone el dolar $, el valor de PI es: ".PI."<br>";
	
	?>
</body>
</html>