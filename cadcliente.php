<?php
require 'cabecalho.php';
?>
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
<?php
require 'rodape.php';
?>