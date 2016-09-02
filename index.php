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

$auvasa = new auvasa();
print_r($auvasa->parada(565));

?>