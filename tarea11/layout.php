<?php 
#Creación de la  clase, utilización d e variables y función.
//Un layout es como una plantilla, para utilizar después en varias
	class layout
	{
		//Defino variable
		var $titulo="TITULO DE LA PAGINA2";
		
		//Creo la función para que me devuelva la cabecera
		function getCabecera()
		{
			//Me devuelve la variable titulo que usaré como cabecera
			return $this->titulo;
		}
	}

?>