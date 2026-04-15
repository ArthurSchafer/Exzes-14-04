<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inteiro = $_POST["valor"];
        
        $resultado = $inteiro / 4.98;

    if ($resultado >= 1) {
        echo "O valor é de:" . $resultado;
    } 
    else {
        echo "Não vale nada.";
    }
}
?>