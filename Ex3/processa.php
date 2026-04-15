<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["numero1"];

    echo "Tabuada do: $a<br>";
    echo "1 x $a = " . ($a * 1) . "<br>";
    echo "2 x $a = " . ($a * 2) . "<br>";
    echo "3 x $a = " . ($a * 3) . "<br>";
    echo "4 x $a = " . ($a * 4) . "<br>";
    echo "5 x $a = " . ($a * 5) . "<br>";
    echo "6 x $a = " . ($a * 6) . "<br>";
    echo "7 x $a = " . ($a * 7) . "<br>";
    echo "8 x $a = " . ($a * 8) . "<br>";
    echo "9 x $a = " . ($a * 9) . "<br>";
    echo "10 x $a = " . ($a * 10) . "<br>";
}
?>