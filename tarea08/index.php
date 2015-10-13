<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Bucle For</title>
	</head>
	<?php
		//DEFINICION DE LA VARIABLE ENTERA
		//El 0 es ausencia de color
		//$color_R=0
		$color_G=0;
		$color_B=0;
    ?>
    <body>
        <table>
           <?php
		   //Queremos pintar de 5 en 5 todos los colores, aumentaré R en 5 cada vuelta hasta 255
				for($color_R=0;$color_R<=255;$color_R=$color_R+5){?>
        	<!--En cada vuelta del for, repetirá la row/fila y se va a pintar tantas veces como
            colores rojo hayan de 0 a 255, para ello variamos con dechex metemos un numero y nos
            devuelve un hexadecimal-->
            <tr>
 		    	<td bgcolor="#<?php echo dechex($color_R);?>0000">
                <!--Pinta los colores en cada row y le añado otro echo para
                imprimir tambien el número que lleva el color_R-->
                	#<?php echo dechex($color_R);?>0000 / <?php echo $color_R;?>
                </td>
            </tr>
            <?php			}//cierre for
			?>
        </table>

    </body>
</html>