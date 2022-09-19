<?php
$usuarios = [
    ["pepe","pepe123"],
    ["brahian","brahian123"],
    ["samax","elwachin"],
];
foreach ($usuarios as $usuario){
    if($_POST["user"] == $usuario[0] && $_POST["pswd"] == $usuario[1]){
        echo "Login Correcte!";
    }
    elseif($_POST["user"] == $usuario[0] && $_POST["pswd"] != $usuario[1]){
            echo "Error en la contrasenya";
    }
    elseif($_POST["user"] != $usuario[0] && $_POST["pswd"] == $usuario[1]){
        echo "Error en l'usuari";
    }
}

?>