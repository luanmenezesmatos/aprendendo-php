<?php

error_reporting(0);

# Inicia a conexão com o banco de dados
include 'conectadb.php';

# Coleta de variáveis via formulário HTML
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
}

if ($nome and $senha) {
	# Passando instruções SQL para o banco
	# Validando se usuário existe
	$sql = "SELECT COUNT(usu_id) FROM usuarios WHERE usu_nome = '$nome' AND usu_senha = '$senha' AND usu_ativo = 's'";
	$retorno = mysqli_query($link, $sql);
	while ($tbl = mysqli_fetch_array($retorno)) {
		$cont = $tbl[0];
	}
}

?>

<html>

<head>
	<link rel="stylesheet" href="css/estiloadm.css">
	<title>Cadastro de Usuário</title>
</head>

<body>
	<div>
		<form action="cadastrousuario.php" method="POST">
			<label for="erro" id="lblErro">
				<?php
				if ($nome and $senha) {
					if ($cont == 1) {
						echo "Usuário já cadastrado!";
					} else {
						echo "Usuário cadastrado com sucesso!";
					}
				} else {
					/* echo "Preencha os campos! É necessário que "; */
					if (!$nome and !$senha) {
						echo "É necessário que você preencha ambos os campos!";
					} else {
						if (!$nome) {
							echo "É necessário que você preencha o nome do usuário!";
						} else if (!$senha) {
							echo "É necessário que você preencha a senha do usuário!";
						}
					}
				}
				?>
			</label>

			<input type="text" name="nome" id="nome" placeholder="Digite o nome do usuário">
			<br>
			<input type="password" name="senha" id="senha" placeholder="Digite a senha">
			<br>
			<input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
		</form>
	</div>
</body>

</html>