<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <h1>Login</h1>
    <form action="controlerLogin.php" method="post">
        <label for="usuario">Usuário</label><br>
        <input type="text" name="usuario" id="usuario" require><br><br>

        <label for="senha">Senha</label><br>
        <input type="password" name="senha" id="senha" require><br><br>

        <input type="hidden" name="acao" id="acao" value="entrar">
        <input type="submit" value="Entrar"><br><br>
    </form>

    <form action="controlerCadastroPessoa.php" method="post">
        <input type="hidden" name="acao" id="acao" value="cadastrarSe">
        <input type="submit" value="Cadastrar-Se">
    </form>
</body>
</html>