<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $inteiro = $_POST["numero"];

    echo "<h2>Resultado:</h2>";

    if ($inteiro % 2 == 0) {
        echo "O numero e par.";
    } 
    else {
        echo "O numero e impar.";
    }
}
?>