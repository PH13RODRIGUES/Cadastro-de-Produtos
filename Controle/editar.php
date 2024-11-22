<?php
include_once __DIR__ . "/conexao.php";

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM Cadastro_Produto WHERE Codigo_Produto = $id";
    $result = mysqli_query($link, $sql);
    $produto = mysqli_fetch_assoc($result);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $produto_nome = $_POST['Produto'];
    $valor = $_POST['Valor'];
    $descricao = $_POST['Descricao'];

    $sql = "UPDATE Cadastro_Produto SET Produto='$produto_nome', Valor='$valor', Descricao='$descricao' WHERE Codigo_Produto=$id";

    if (mysqli_query($link, $sql)) {
        header("Location: ../Consultar.php");
        exit();
    } else {
        echo "Erro ao atualizar: " . mysqli_error($link);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <title>Editar Produto</title>
</head>

<body>
    <div class="col-8">
        <div class="container">
        <h1>Editar Produto</h1>
            <form method="POST">

                <div class="mt-3 form-floating">
                    <input type="number" class="form-control Desabilitado " id="Codigo_Produto" readonly>
                    <label for="Codigo_Produto" class="form-label">Codigo do Produto</label>
                </div>

                <div class="mt-3 form-floating">
                    <input type="text" class="form-control" id="Produto" name="Produto" value="<?= $produto['Produto'] ?>" required><br>
                    <label for="Produto" class="form-label">Produto:</label>
                </div>

                <div class="mt-3 form-floating">
                <input type="number" class="form-control" id="Valor" name="Valor" step="0.01" value="<?= $produto['Valor'] ?>" required><br>
                    <label for="Valor" class="form-label">Valor:</label>
                </div>

                <div class="mt-3 form-floating">
                <input type="text" class="form-control" id="Descricao" name="Descricao" value="<?= $produto['Descricao'] ?>" required><br>
                    <label for="Descricao" class="form-label">Descrição:</label>
                    
                </div>

                <div class="row">
                    <div class="col">
                        <button type="submit" class="btn btn-success form-control">Salvar</button>
                    </div>

                    <div class="col">
                        <button type="button" class="btn btn-danger form-control">
                            <a href="../Consultar.php">Cancelar</a>
                        </button>
                    </div>
                </div>
        </div>
        </form>
    </div>
    </div>
</body>

</html>