<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
#Creación de la primera clase, utilización d e variables y función.
//Un layout es como una plantilla, para utilizar después en varias
	class layout
	{
		//Defino variable
		var $titulo="TITULO DE LAPAGINA2";
		
		//Creo la función para que me devuelva la cabecera
		function getCabecera()
		{
			//Me devuelve la variable titulo que usaré como cabecera
			return $this->titulo;
		}
	}

?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Orientacion a Objetos</title>
</head>
<?php 
	//Creo/instancio un objeto de la clase layout
	$pagina = new layout();
	
	//Imprimo
	echo $pagina->getCabecera();
?>
<body>
</body>
</html>