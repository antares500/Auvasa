# Auvasa
Unoficial API of Auvasa (Autobuses urbanosde valladolid)

Clase no oficial para la conuslta de lineas, horarios, posiciones y demás información sobre la red de autobuses de Valladolid

Ejemplos:
```php
$auv = new auvasa();
```

* Listado completo de paradas
```php
$paradas = $auv->parada();
```

* Informacion de una sola parada, datos y timepo de llegada de los autobuses
```php
$parada = $auv->parada(565);
```

* Listado de lineas
```php
$lineas = $auv->linea();
```

* Listado de paradas desde una linea, con trayectos y orden
```php
$linea = $auv->linea('P1');
```

* Informacion y saldo de la tarjeta de un usuario (requiere el numero de tarjeta)
```php
$tarjeta = $auv->tarjeta(1234456789);
```

* horarios de las paradas (cuando comienza el servicio, termina...)
```php
$horario = $auv->horario();
```

* Listado de noticias
```php
$noticias = $auv->noticias();
```
