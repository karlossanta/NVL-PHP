<?php

function cuentaLetraA(string $cadena): int {
    return substr_count(strtolower($cadena), 'a');
}

$cadena = "Upgrade Hub";
echo "La cadena \"" . $cadena . "\" tiene " . cuentaLetraA($cadena) . " letra A";