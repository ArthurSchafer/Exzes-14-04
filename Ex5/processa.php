<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["numero1"];
    $f = $a*1.8 +32;
    echo "Temperatura em Fahrenheit: $f";
}
?>