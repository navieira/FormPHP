<h1>Salvos</h1>

<?php   

$N° = $_POST["N°"];
$data = $_POST["data"];
$Firma = $_POST["Firma"];
$Endereço = $_POST["Endereço"];
$Complemento = $_POST["Complemento"];
$Bairro = $_POST["Bairro"];
$Cidade = $_POST["Cidade"];
$uf = $_POST["uf"];
$CEP = $_POST["CEP"];
$CNPJ = $_POST["CNPJ"];
$Inscr = $_POST["Inscr"];
$Tel = $_POST["Tel"];
$celular = $_POST["celular"];
$Email = $_POST["Email"];
$OBS = $_POST["OBS"];

if(empty($celular)) {
    echo "<p>O celular deve ser informado"
}
else{
    echo "<p> Olá <b>$N°</b>"
    file_put_contents("dados.csv", "$N°,$Firma,$CNPJ,$Inscr,$Email,$OBS\n", FILE_APPEND);
}


?>