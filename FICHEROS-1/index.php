<?php

//Esta es la función que hemos creado algunos ejercicios atrás
//de igual forma que contaba carácteres, puede contar palabras en un texto;
function cuentaLetras(string $cadena, string $letra): int {
    return substr_count(strtolower($cadena), strtolower($letra));
}

//Función que cuenta el número de veces que se repite una palabra en un archivo
//La ruta al archivo debe ser absoluta
function cuentaPalabrasArchivo($rutaArchivo, $palabra){
    $descriptor = fopen($rutaArchivo, 'r');
    $contador = 0;
    while(($contenido = fgets($descriptor))) {
        $contador += cuentaLetras($contenido, $palabra);
    }
    return $contador;
}


$archivo = "D:/upgradeHub/cursoNivelacion/PHP/FICHEROS-1/el_quijote.txt";
$palabra = "molino";
echo cuentaPalabrasArchivo($archivo, $palabra);