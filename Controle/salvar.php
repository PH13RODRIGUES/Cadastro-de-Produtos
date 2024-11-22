<?php
include_once __DIR__ . "/conexao.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto = $_POST['Produto'];
    $valor = $_POST['Valor'];
    $descricao = $_POST['Descricao'];

    $sql = "INSERT INTO Cadastro_Produto (Produto, Valor, Descricao) VALUES ('$produto', '$valor', '$descricao')";

    if (mysqli_query($link, $sql)) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o produto: " . mysqli_error($link);
    }
}
?>
<Div class="col-8">

<button type="button" class="btn btn-info">
<a href="../GeladaoIndex.php">Voltar</a>
</button>

</Div>