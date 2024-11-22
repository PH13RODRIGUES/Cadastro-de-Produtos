<?php
include_once __DIR__ . "/conexao.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM Cadastro_Produto WHERE Codigo_Produto = $id";

    if (mysqli_query($link, $sql)) {
        header("Location: ../Consultar.php");
        exit();
    } else {
        echo "Erro ao excluir o produto: " . mysqli_error($link);
    }
}
?>
