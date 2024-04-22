<?php
    $acao = $_POST['acao'];
    
    if ($acao === 'cadastrarSe') {
        header('Location: telaCadastroPessoa.php');

    } elseif ($acao === 'cadastrar') {
        $nome = $_POST['nomePessoa'];
        $senha = $_POST['senhaPessoa'];
        $idade = floatval($_POST['idadePessoa']);
        $sexo = $_POST['sexo'];

        $arquivo = fopen('pessoas.csv', 'r');

        $pessoas = [];

        while ($linha = fgetcsv($arquivo)) {
            $arraylinha = explode(';', $linha[0]);
    
            $pessoa = [
                'codigo' => $arraylinha[0],
                'nome' => $arraylinha[1],
                'senha' => $arraylinha[2],
                'idade' => $arraylinha[3],
                'sexo' => $arraylinha[4]
            ];

            array_push($pessoas, $pessoa);
        }

        fclose($arquivo);

        $arquivo = fopen('pessoas.csv', 'a');

        $pessoa = [
            count($pessoas) + 1,
            $nome,
            $senha,
            $idade,
            $sexo,
        ];

        fputcsv($arquivo, $pessoa, ';');

        fclose($arquivo);

        header('Location: telaLogin.php');
    }
    
?>