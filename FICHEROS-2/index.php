<?php

//Fsunción que en una cadena, sustituye una palabra por otra
function sustituir(string $cadena, string $palabraBuscar, string $palabraSustituir) {
    return str_replace($palabraBuscar, $palabraSustituir, $cadena);
}

//Funcion que crea un fichero en el que se sustituye una palabra por otra a partir del original.
function reemplazar(string $rutaArchivo, string $rutaArchivoModificado, string $palabraBuscar, string $palabraSustituir) {
    $fdOriginal = fopen($rutaArchivo, 'r');
    $fdModificado = fopen($rutaArchivoModificado, 'x');

    while(($contenido = fgets($fdOriginal))) {
        fwrite($fdModificado, sustituir($contenido, $palabraBuscar, $palabraSustituir));
    }
    fclose($fdOriginal);
    fclose($fdModificado);
}


$archivo = "D:/upgradeHub/cursoNivelacion/PHP/FICHEROS-2/el_quijote.txt";
$archivoModificado = "D:/upgradeHub/cursoNivelacion/PHP/FICHEROS-2/quijote-modificado2.txt";
$palabraBuscar = "Sancho";
$palabraSustituir = "Morty";
reemplazar($archivo, $archivoModificado, $palabraBuscar, $palabraSustituir);
