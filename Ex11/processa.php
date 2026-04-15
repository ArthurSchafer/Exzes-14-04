<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["numero1"];
    $c1 = $a/100;
    $c2 = $c1*90;
        echo "Preço com desconto é: $c2";
}