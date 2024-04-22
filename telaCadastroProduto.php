<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    session_start();

    if (!isset($_SESSION['logado'])) {
        header('Location: telaLogin.php');
    }
?>
<body>
    <?php  require 'menu.html'; ?>
    <h1>Cadastro de Produto</h1>
    <form action="controlerCadastroProduto.php" method="post">

    <label for="descricao">Descrição</label><br>

    <input type="text" name="descricao" id="descricao" require><br><br>

    <label for="preco">Preço</label><br>

    <input type="number" name="preco" id="preco" step="any" required><br><br>

    <input type="hidden" name="acao" id="acao" value="cadastrarProduto">
    <input type="submit" value="Cadastrar"></form>

</body>
</html>