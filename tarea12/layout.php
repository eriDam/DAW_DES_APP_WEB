<?php 
#Creación de la  clase, utilización d e variables y función.
//Un layout es como una plantilla, para utilizar después en varias
	class layout
	{
		//Defino variable 
		public $titulo="TITULO DE LA PAGINA";#Se puede acceder desde fuera
		private $server;#solo se puede acceder desde la propia clase(layaout e este caso)
		
		//El consructor es una función especial que se ejecuta cuand se 
		//instancia un objeto de esa clase, se denomina __construct
		function __construct()
		{	
			//Utilizamos utilizamos la var server, almacena el array de SERVER 
			$this->server=$_SERVER['HTTP_USER_AGENT'];	
		}
		
		//Creo la función para que me devuelva la cabecera
		function getCabecera()
		{
			//Me devuelve la variable titulo que usaré como cabecera
			return $this->titulo;
		}
		
		function getPie()
		{
			return $this->server;
		}
	}

?>