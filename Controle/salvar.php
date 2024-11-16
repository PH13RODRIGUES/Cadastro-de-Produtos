<?php
include_once "conexao.php";

$Codigo_Produto = filter_input(INPUT_GET,"Codigo_Produto", FILTER_SANITIZE_SPECIAL_CHARS);
$Produto = filter_input(INPUT_GET,"Produto", FILTER_SANITIZE_SPECIAL_CHARS);
$Descricao = filter_input(INPUT_GET,"Descricao", FILTER_SANITIZE_SPECIAL_CHARS);
$Valor = filter_input(INPUT_GET,"Valor", FILTER_SANITIZE_SPECIAL_CHARS);

$sql= "INSERT INTO Cadastro_Produto VALUES (null, $Produto, $Valor )";

$inserir = mysqli_query($link, $sql);

if($inserir){
    echo "Salvo com sucesso!";
} else{
    echo "Erro ao salvar";
}
mysqli_close(); 
?>