<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nome = $_POST["nome"];
$preco = $_POST["preco"];

echo "O nome digitado e: " . $nome . "<br>";
echo "O preco digitado e: " . $preco;
}
?>