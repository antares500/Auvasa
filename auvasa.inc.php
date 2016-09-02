<?php
//AUVASA API - 2 sep 2016

class auvasa {
	
	private
		$url = array(
			
			'paradas'	=> 'http://www.auvasa.es/dataapp/Paradas.xml',					//listado completo de paradas
			'parada'	=> 'http://www.auvasa.es/rssparada.asp?codigo=%codigoParada%',	//datos y timepo de llegada de los autobuses
				
			'lineas'	=>	'http://www.auvasa.es/dataapp/Lineas.xml',					//listado de lineas
			'linea'		=>	'http://www.auvasa.es/rsstrayectos.asp?codigo=%linea%',		//listado de paradas desde una linea, con trayectos y orden
			
			'horarios'	=> 'http://www.auvasa.es/dataapp/Horarios.xml',
			'tarjeta'	=> 'http://2.139.171.116:3506/rsstarjeta.asp?codigo=%tarjeta%',
			'noticias'	=> 'http://www.auvasa.es/rss.asp'
		);
	
	function parada($codigoParada=false){
		$url = ($codigoParada) ? 
			str_replace('%codigoParada%', base64_encode(base64_encode($codigoParada)), $this->url['parada']) : 
			$this->url['paradas'];
		return $this->call($url);
	}
	
	function linea($linea=false){
		$url = ($codigoParada) ? 
			str_replace('%linea%', $linea, $this->url['linea']) : 
			$this->url['lineas'];
		return $this->call($url);
	}
	
	function horario(){			return $this->call($this->url['horarios']);	}
	function tarjeta($tarjeta){	return $this->call(str_replace('%tarjeta%', base64_encode(base64_encode($tarjeta)), $this->url['tarjeta']));	}
	function noticias(){		return $this->call($this->url['noticias']);	}
	
	// / Helper function / // // //
	
	function call($url){

		return json_decode(json_encode(
			simplexml_load_string(
				file_get_contents($url),
				"SimpleXMLElement",
				LIBXML_NOCDATA
			)
		),TRUE);
	}
}

?>