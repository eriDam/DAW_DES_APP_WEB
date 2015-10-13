<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Proyecto 01</title>
 <style type="text/css"> 
 			td, th { 
				border-style:solid;
    			border-width:thin;
 			}
 			 
 </style>
</head>
 <?=
 //DEFINICION DE VARIABLES
 	$centrado="<center>";
	$centrado_cerrar="</center>";
 ?>
 <!--<body><table>
     		Sin programación php
            <tr>
        		<td> <img src="foto01.jpg" width="320px" height="250px"/></br>foto01.jpg</td>
        		<td><img src="foto02.jpg" width="320px" height="250px"/></br>foto02.jpg</td>
      		</tr>
            <tr>
        		<td><img src="foto03.jpg" width="320px" height="250px"/></br>foto03.jpg</td>
        		<td><img src="foto04.jpg" width="320px" height="250px"/></br>foto04.jpg</td> 
      		</tr> -->
   <body>
			<?php echo $centrado;?>
        <table>
           <?php
		   		echo "<tr>";
				for($foto=1;$foto<=4;$foto++){
					if($foto<3){
						echo "<td>";
					   //echo "<img src=\"foto_01.jpg\" width=200 height=200>"; 
						echo "<img src=\"foto0".$foto.".jpg\" width=320 height=250>";
						echo "<br>";
						echo "<a href=\"foto0".$foto.".jpg\">foto0".$foto."</a>";
						echo "</td>";
					}else{
						if($foto==3){							
						echo "</tr>";
						echo "<tr>";
						echo "<td>";
						echo "<img src=\"foto0".$foto.".jpg\" width=320 height=250>";
						echo "<br>";
						echo "<a href=\"foto0".$foto.".jpg\">foto0".$foto."</a>";	
						echo "</td>";		
					}else{
						echo "<td>";
						echo "<img src=\"foto0".$foto.".jpg\" width=320 height=250>";
						echo "<br>";
						echo "<a href=\"foto0".$foto.".jpg\">foto0".$foto."</a>";	
						echo "</td>";
						echo "</tr>";
						}
				}
				}
			?>
       </table>  
       <?php echo $centrado_cerrar;?>	
    </body>
</html>