<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$numero = $_POST["numero"];
$quadrado = $numero * $numero;
echo "O quadrado do número digitado é: $quadrado";
}
?>