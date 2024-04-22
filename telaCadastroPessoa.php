<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Pessoa</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form action="controlerCadastroPessoa.php" method="post">

    <label for="nomePessoa">Nome</label><br>
    <input type="text" name="nomePessoa" id="nomePessoa" required><br><br>

    <label for="senhaCliente">Senha</label><br>
    <input type="password" name="senhaPessoa" id="senhaPessoa" required><br><br>

    <label for="idadePessoa">Idade</label><br>
    <input type="number" name="idadePessoa" id="idadePessoa" required><br><br>

    <label for="sexo">Sexo</label><br>
    <select name="sexo" id="sexo">
        <option value="F">Feminino</option>
        <option value="M">Masculino</option>
    </select><br><br>

    <input type="hidden" name="acao" id="acao" value="cadastrar">
    <input type="submit" value="Cadastrar"></form>

</body>
</html>