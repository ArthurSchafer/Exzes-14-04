<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $a = $_POST["numero1"];
    $c1 = $a*100;
        echo "Deu: $c1 cm";
}