<?php

require "includes/funcoes-controle-de-acesso.php";
require "includes/funcoes-usuarios.php";
require "includes/cabecalho.php";

/*Verificando se o botão entrar foi acionado*/
if (isset($_POST['entrar'])) {

	//Validando os campos (se estão vazios)
	if (empty($_POST['email']) || empty($_POST['senha'])) {
		header("location:login.php?capos_obrigatorios");
		die();
	}
	//capiturando e mail e senha
	$email = mysqli_real_escape_string($conexao, $_POST['email']);
	$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
	 
	//1) Buscando no banco de dados o usuario através do e-mail
	$usuario = buscarUsuario($conexao, $email);

	//2)Tendo um uuario válido, vamos verifiar a senha digitada comparando com a senha cadastrada no banco de dados */
	if ($usuario !== null && password_verify($senha, $usuario['senha'])) {
		//Iniciando o processo dce login
		login($usuario['id'], $usuario['nome'], $usuario['tipo']);
		//Redirecionar para admin/index.php
		header("location:admin/index.php");
		die();
	} else {
		//Senão, algo esta errado( email e/ ou senha e nao pode entrar)
		header("location:login.php?dados_incorretos");
		die();
	}
}
?>

<div class="row">
	<div class="bg-white rounded shadow col-12 my-1 py-4">
		<h2 class="text-center fw-light">Acesso à área administrativa</h2>

		<form action="" method="post" id="form-login" name="form-login" class="mx-auto w-50" autocomplete="off">

			<p class="my-2 alert alert-warning text-center">
				Mensagens de feedback...
			</p>

			<div class="mb-3">
				<label for="email" class="form-label">E-mail:</label>
				<input class="form-control" type="email" id="email" name="email">
			</div>
			<div class="mb-3">
				<label for="senha" class="form-label">Senha:</label>
				<input class="form-control" type="password" id="senha" name="senha">
			</div>

			<button class="btn btn-primary btn-lg" name="entrar" type="submit">Entrar</button>

		</form>

	</div>

</div>

<?php
require "includes/rodape.php";
?>