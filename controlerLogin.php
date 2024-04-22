<?php
    $acao = $_POST['acao'];

    if ($acao === 'entrar') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $arquivo = fopen('pessoas.csv', 'r');

        $pessoas = [];

        while($data = fgetcsv($arquivo)){
            $arrayData = explode(';',$data[0]);

            $pessoa = [
                'codigo' => $arrayData[0],
                'nome' => $arrayData[1],
                'senha' => $arrayData[2],
                'idade' => $arrayData[3],
                'sexo' => $arrayData[4]
            ];
            array_push($pessoas, $pessoa);
        }
        
        $usuarioEncontrado = false; 
        
        foreach($pessoas as $pessoa){
            if($usuario == $pessoa['nome'] && $senha == $pessoa['senha']) {

                $usuarioEncontrado = true;
                break;
            }
        }
        session_start();

        if ($usuarioEncontrado === true) {
            $_SESSION['logado'] = true;

            header('Location: telaProdutos.php');
        } else {
            header('Location: telaLogin.php');
        }
        exit();
    }   
        
?>