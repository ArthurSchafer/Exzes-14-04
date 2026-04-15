<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["numero1"];

    if ($a > 0) {
        echo "O número é positivo";
    } else if ($a < 0) {
        echo "O número é negativo";
    } else {
        echo "O número é zero";
    }
}
?>