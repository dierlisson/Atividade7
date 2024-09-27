<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>cadcliente</title>
</head>
<body>
<h1>Cadastro de Clientes</h1>

<form action="dadosform.php" method="post">

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email">
    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf">
   
    <button type="submit">Cadastrar</button>

</form>
</body>
</html>