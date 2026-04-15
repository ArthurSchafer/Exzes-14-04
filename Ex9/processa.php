<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["numero1"];
    $b = $_POST["numero2"];
    $area = $a*$b;
        echo "Área do triângulo é: $area";
}