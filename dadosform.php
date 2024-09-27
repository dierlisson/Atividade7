<?php
require 'cabecalho.php';

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

// $cadHorario= new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
date_default_timezone_set('America/Sao_Paulo');
$cadHorario = date('d/m/Y H:i:s', $_SERVER['REQUEST_TIME']);

// $variavel = var_dump($_POST);
if (($nome != "" && preg_match("/^[a-z ]+$/i", $nome)) && ($email != "" && $email != " ") && $cpf != "") {
    // if(preg_match("/^[0-9]{11}$/", $cpf)){
    if (strlen($cpf) == 11 && preg_match("/^[0-9]+$/", $cpf)) {

        echo "<h1>Dados Cadastrados!</h1><br>" . "<h4>Dados do cliente:</h4><br>" . "<h1> Nome: $nome <br> Email: $email <br> CPF: $cpf </h1>";
        echo "<h6> Horário do cadastro: " . $cadHorario;
    } else {
        echo "<h1>Informe um CPF válido!</h1>";
    }
} else {
    echo "<h1>Todos os campos devem ser informados!</h1>";
}
require 'rodape.php';
?>