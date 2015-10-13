<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>
    </head>
	<?php
		//DEFINICION DE VARIABLES
		$num1=23;
		$num2=1;
		$num3=-$num1;
		
		$centrado="<center>";
		$centrado_cerrar="</center>";
	?>
    <body bgcolor="#FF0000">
    	
        <?php echo $centrado;?>
        <table border="1">
     		<tr>
        		<td>num1</td>
        		<td>+</td>
        		<td>num2</td>
        		<td>=</td>
                <td><?php echo $num1+$num2;?></td>
      		</tr>
            <tr>
        		<td>num1</td>
        		<td>+</td>
        		<td>+</td>
        		<td>=</td>
                <td><?php echo ++$num1;?></td>
      		</tr>
            <tr>
        		<td>num1</td>
        		<td>-</td>
        		<td>-</td>
        		<td>=</td>
                <td><?php echo --$num2;?></td>
      		</tr>
    	</table>
        <?php echo $centrado_cerrar;?>
    </body>
</html>