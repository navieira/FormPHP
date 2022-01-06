<?php
$N° = $_POST["n°"];
$Firma = $_POST["firma"];
$FData = $_POST["data"];
$Endereço = $_POST["endereço"];
$Complemento = $_POST["complemento"];
$Cidade = $_POST["cidade"];
$UF = $_POST["uf"];
$CEP = $_POST["cep"];
$CNPJ = $_POST["cnpj"];
$CPF = $_POST["cpf"];
$Inscr = $_POST["inscr"];
$Tel = $_POST["tel"];
$Celular = $_POST["celular"];
$Email = $_POST["email"];

file_put_contents("dados.csv", "$N°,$Firma, $Celular, $Endereço, $Email\n");
