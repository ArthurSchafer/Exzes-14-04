<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["numero1"];
    $f = $a*3;
    echo "Triplo do número: $f";
}
?>