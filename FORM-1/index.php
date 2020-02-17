<?php 


    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $confirm = $_POST["confirm"];

    if ($pass == $confirm) {
        if (strlen($pass) >= 8) {
            echo "Datos procesados correctamente!";
        } else {
            echo "La longitud de la contraseña es menor que 8";
        }
    } else {
        echo "Las contraseñas no coinciden";
    }

    
?>