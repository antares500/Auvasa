<?php

//examples

#	'http://2.139.171.116:3506/rsstarjeta.asp?codigo='.base64_encode(base64_encode($numeroTarjeta)),

#	'http://www.auvasa.es/rssparada.asp?codigo='.base64_encode(base64_encode($numeroParada)),
#	'http://www.auvasa.es/rssparada.asp?codigo=TnpFeA==',
#	'http://www.auvasa.es/rssparada.asp?codigo=TVRBNE5BPT0=',

#	'http://www.auvasa.es/dataapp/Lineas.xml',
#	'http://www.auvasa.es/dataapp/Horarios.xml',
#	'http://www.auvasa.es/rsstrayectos.asp?codigo=1',
#	'http://www.auvasa.es/rss.asp', //noticias

include('auvasa.inc.php');
$auv = new auvasa();

# Listado completo de paradas
$paradas = $auv->parada();

# Informacion de una sola parada, datos y timepo de llegada de los autobuses
$parada = $auv->parada(565);

# Listado de lineas
$lineas = $auv->linea();

# Listado de paradas desde una linea, con trayectos y orden
$linea = $auv->linea('P1');

# Informacion y saldo de la tarjeta de un usuario (requiere el numero de tarjeta)
$tarjeta = $auv->tarjeta(1234456789);

# Horarios de las paradas (cuando comienza el servicio, termina...)
$horario = $auv->horario();

# Listado de noticias
$noticias = $auv->noticias();

print_r(array(
	'paradas'	=> $paradas,
	'parada'	=> $parada,
	'lineas'	=> $lineas,
	'linea'		=> $linea,
	'tarjeta'	=> $tarjeta,
	'horario'	=> $horario,
	'noticias'	=> $noticias
));

?>