<?php
    $acao = $_POST['acao'];

    if ($acao === 'cadastrarProduto') {
        $descricao = $_POST['descricao'];
        $preco = floatval($_POST['preco']);

        $arquivo = fopen('produtos.csv', 'r');

        $produtos = [];
    
        while ($linha = fgetcsv($arquivo)) {
            $arraylinha = explode(';', $linha[0]);
    
            $produto = [
                'codigo' => $arraylinha[0],
                'descricao' => $arraylinha[1],
                'preco' => $arraylinha[2]
            ];
    
            array_push($produtos, $produto);
        }
    
        fclose($arquivo);

        $arquivo = fopen('produtos.csv', 'a');

        $produto = [
            count($produtos) + 1,
            $descricao,
            $preco,
        ];

        fputcsv($arquivo, $produto, ';');

        fclose($arquivo);

        header('Location: telaProdutos.php');
        exit();

    }
?>