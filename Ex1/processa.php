<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["numero1"];
    $b = $_POST["numero2"];
    $soma = $a+$b;
    $media = $soma/2;
        echo "A média dos numeros é: $media";
}