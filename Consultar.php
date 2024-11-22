<?php
include_once "Controle/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos Cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    <div class="container mt-5">
        <h1>Produtos Cadastrados</h1>

        <table class="table table-bordered table-striped mt-4">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Realizar a consulta dos produtos
                $sql = "SELECT * FROM Cadastro_Produto";
                $result = mysqli_query($link, $sql);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>{$row['Codigo_Produto']}</td>";
                        echo "<td>{$row['Produto']}</td>";
                        echo "<td>R$ " . number_format($row['Valor'], 2, ',', '.') . "</td>";
                        echo "<td>{$row['Descricao']}</td>";
                        echo "<td><a href='Controle/editar.php?id={$row['Codigo_Produto']}'><img src='Imagens/editar.svg' alt='Editar' width='24'></a></td>";
                        echo "<td><a href='Controle/excluir.php?id={$row['Codigo_Produto']}' onclick='return confirm(\"Tem certeza que deseja excluir este produto?\")'><img src='Imagens/excluir.svg' alt='Excluir' width='24'></a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center'>Nenhum produto encontrado.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
</body>

</html>