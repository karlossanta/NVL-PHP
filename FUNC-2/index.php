<?php

function cuentaLetras(string $cadena, string $letra): int {
    return substr_count(strtolower($cadena), strtolower($letra));
}

$cadena = "Upgrade Hub";
$letra = 'R';
echo "La cadena \"" . $cadena . "\" tiene " . cuentaLetras($cadena, $letra) . " letra $letra";