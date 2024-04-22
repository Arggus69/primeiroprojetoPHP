<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
    session_start();

    if (!isset($_SESSION['logado'])) {
        header('Location: telaLogin.php');
    }
    $arquivo = fopen('produtos.csv', 'r');

    $produtos = [];

    while ($linha = fgetcsv($arquivo)) {
        $arraylinha = explode(';', $linha[0]);

        $produto = [
            'codigo' => $arraylinha[0],
            'descricao' => str_replace('"', '',$arraylinha[1]),
            'preco' => $arraylinha[2]
        ];

        array_push($produtos, $produto);
    }

    fclose($arquivo);
?>
<body>
    <?php require 'menu.html'; ?>
    <h1>Produtos</h1>
    <table>
        <thead>
            <tr>
                <th>Descrição</th>
                <th>Preço</th>
            </tr>    
        </thead>
        <tbody>
            <?php foreach($produtos as $produto ) { ?>
                <tr>
                    <td><?php echo $produto['descricao']; ?></td>
                    <td><?php echo "R$" . $produto['preco']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>