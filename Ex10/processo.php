<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$ano = $_POST["dataNascimento"];
$idade = 2026 - $ano;

if ($idade >= 18) {
    echo "Maior de idade <br>";
    echo "A sua idade é: " . $idade;
} else {
    echo "Menor de idade <br>";
    echo "A sua idade é: " . $idade;
}
}
?>