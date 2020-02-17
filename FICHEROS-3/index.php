<?php

//2019-07-23 20:10
//Los dos puntos ':' no son un carácter válido para el nombre de un directorio
//Cogemos la marca de tiempo
$timestamp = date("Y-m-d H-i");
//Creamos un directorio con el timestamp
mkdir($timestamp);

$nombreScript = basename(__FILE__);
//Cogemos todos los ficheros del directorio, excluyendo la carpeta que acabamos de crear y el script que estamos ejecutando
$ficheros = array_diff(scandir("."), [".", "..", $timestamp, $nombreScript]);

//Copiamos todos los archivos a la carpeta creada anteriormente
foreach ( $ficheros as $fichero) {
    copy($fichero, "$timestamp/$fichero.modificado");
}