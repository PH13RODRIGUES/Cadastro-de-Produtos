<?php
include_once "Controle/conexao.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geladão & Cia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
    <main class="conteudo">
        <div class="container">
            <h1 class="mt-3">Bem-vindo ao Geladão & Cia!</h1>
            <div class="row">

                <div class="col">
                    <h2>Cadastro de Produtos</h2>
                </div>

            </div>
            <div class="row">
                <!-- Essa div para inserir imagem -->
                <div class="col-4">
                    <img src="Imagens/produto.png" alt="produto" class="img-produto">
                </div>

                <div class="col-8">
                <form method="POST" action="Controle/salvar.php">

                    <div class="form-floating mt-3">
                        <input type="text" class="form-control" id="Produto" name="Produto" required>
                        <label for="Produto">Nome do Produto</label>
                    </div>
                    <div class="form-floating mt-3">
                        <input type="number" class="form-control" id="Valor" name="Valor" required>
                        <label for="Valor">Valor</label>
                    </div>
                    <div class="form-floating mt-3">
                        <textarea class="form-control" id="Descricao" name="Descricao" required></textarea>
                        <label for="Descricao">Descrição</label>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary form-control">Novo</button>
                        </div>
                        <div class="col">
                            <!-- Alterado o caminho para o arquivo Consultar.php que está na raiz -->
                            <a href="Consultar.php" target="_blank" class="btn btn-success form-control">Consultar</a>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN6jIeHz" crossorigin="anonymous"></script>
</body>

</html>