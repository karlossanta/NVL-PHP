<?php
//Esta función se podría añadir del otro fichero con un include
function cuentaLetras(string $cadena, string $letra): int {
    return substr_count(strtolower($cadena), strtolower($letra));
}
function tieneTodasVocales(string $cadena): bool {
    $tieneLasVocales = true;
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    foreach($vocales as $vocal) {
        if (cuentaLetras($cadena, $vocal) == 0) {
            $tieneLasVocales = false;
            break;
        }
    }
    if ($tieneLasVocales) {
        echo "LA PALABRA CONTIENE LAS 5 VOCALES\n";
    } else {
        echo "NO CONTIENE TODAS LAS VOCALES\n";
    }
    return $tieneLasVocales;
}

$cadena1 = "Upgrade Hub";
$cadena2 = "Murcielago";

tieneTodasVocales($cadena1);
tieneTodasVocales($cadena2);