<?php
require "conecta.php";

// Funçõa para inserir novos usuários
function inserirUsuario($conexao, $nome, $email, $senha, $tipo)
{
    // Montando  o comando SQL para fazer o INSET dos dados
    $sql = "INSERT INTO usuarios (nome, email, tipo, senha) 
         VALUES('$nome', '$email', '$tipo', '$senha')";

    //Executando o comando no banco via PHP
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

function listarUsuarios($conexao){
     $sql = "SELECT nome, email, tipo, id FROM usuarios";
     /*Executamdo o comando no banco via PHP
     obtendo oresultado (*bruto*) da consulta/comando.*/
     $resultado = mysqli_query($conexao, $sql) or die (mysqli_error($conexao));
    /*Extraindo do resultado "bruto" os dados da consulta
    em formato ARRAY ASSOCIATIVO.*/
     return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
}

