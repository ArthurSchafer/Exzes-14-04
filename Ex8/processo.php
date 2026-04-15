<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$valor = $_POST["valor"];
$valor1 = $valor / 100;
$valor2 = $valor1 * 115;
echo "O valor com acrésimo é de: " . $valor2;

}
?>