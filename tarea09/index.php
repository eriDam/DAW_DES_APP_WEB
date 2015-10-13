<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
//Puedo crear el code php, (las variables) fuera del html
//Le paso el parametro w a la funcion date para q me de el numero de día entre 01 y 31
$diaMes = date("d");
//Representación numérica del día de la semana
$diaSemana = date("w");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Condicional if - else</title>
</head>

<body>
	<h3>DIA MES</h3>
	<?php 
		if($diaMes <= 15){
			echo  "Primera quincena";
		}else{
			echo "Segunda quincena";
		} 
	?>
    <h3>DIA SEMANA</h3>
    <!--Con esta sentencia no es necesario escribir el echo para impriimr variables-->
    
	<?=$diaMes;?>
	<?php 
		if ($diaSemana==1){
			echo "El día es Lunes";
		}elseif($diaSemana==2){ 
			echo "El día es Martes";
		}elseif($diaSemana==3){ 
			echo  "El día es Miércoles";
		}elseif($diaSemana==4){ 
			echo  "El día es Jueves";
		}else{
			echo  "El día es Viernes";
		} 
	?>

</body>
</html>