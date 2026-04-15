<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$valor = $_POST["valor"];
$pessoas = $_POST["pessoas"];
$valorunitario = $valor / $pessoas;
echo "O quanto cada pessoa deverá pagar é R$$valorunitario";
}
?>