<?php
require "conecta.php";

// Funçõa para inserir novos usuários
function inserirUsuario($conexao, $nome, $email, $senha, $tipo)
{
    // Montando  o comando SQL para fazer o INSET dos dados
    $sql = "INSERT INTO usuarios (nome, email, tipo, senha) 
         VALUES('$nome', '$email', '$tipo', '$senha')";

    //Executando o comando no banco via PHP
    mysqli_query($conexao, $sql);

}
