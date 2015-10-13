<?php 
	//Utilizamos require para utilizar el documento layout cioo clase
	require "layout.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<?php 
	$pagina = new layout();
	
	echo $pagina->getCabecera();
	echo "<br>";#salto de línea
	echo $pagina->getPie();#me imprimirá lo que obtenga de la funcion getPie que esta en la otra clase.

?>
<body>
</body>
</html>