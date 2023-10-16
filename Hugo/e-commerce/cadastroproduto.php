<?php

/* error_reporting(0); */

# Inicia a conexão com o banco de dados
include 'conectadb.php';

# Coleta de variáveis via formulário HTML
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$arquivo_imagem = $_FILES['arquivo_imagem'];
}

if ($nome and $descricao and $preco) {
	# Passando instruções SQL para o banco
	# Validando se o produto existe
	$sql = "SELECT COUNT(pro_id) FROM produtos WHERE pro_nome = '$nome' AND pro_descricao = '$descricao' AND pro_preco = '$preco' AND pro_ativo = 's'";
	$retorno = mysqli_query($link, $sql);
	while ($tbl = mysqli_fetch_array($retorno)) {
		$cont = $tbl[0];
	}
}

# Fazer a parte de upload de imagem aqui e salvar no banco de dados como LONGBLOB
# Pegar o "arquivo_imagem" e salvar no banco de dados

if ($arquivo_imagem) {
	$imagem = $_FILES['arquivo_imagem']['tmp_name'];
	$nome = $_FILES['arquivo_imagem']['name'];
	$imagem = base64_encode(file_get_contents(addslashes($imagem)));

	$sql_imagem = "INSERT INTO produtos (pro_nome, pro_descricao, pro_preco, pro_imagem) VALUES ('$nome', '$descricao', '$preco', '$imagem')";
	$retorno_imagem = mysqli_query($link, $sql_imagem);
}

?>

<html>

<head>
	<link rel="stylesheet" href="css/estiloadm.css">
	<title>Cadastro de Produto</title>
</head>

<body>
	<div>
		<form action="cadastroproduto.php" method="POST">
			<label for="erro" id="lblErro">
				<?php
				if ($nome and $descricao and $preco and $arquivo_imagem) {
					if ($cont == 1) {
						echo "Produto já cadastrado!";
					} else {
						echo "Produto cadastrado com sucesso!";
					}
				} else {
					if (!$nome) {
						echo "É necessário que você preencha o nome do produto!";
					} else if (!$descricao) {
						echo "É necessário que você preencha a descrição do produto!";
					} else if (!$preco) {
						echo "É necessário que você preencha o preço do produto!";
					} else if (!$arquivo_imagem) {
						echo "É necessário que você selecione uma imagem para o produto!";
					}

					if ($retorno_imagem) {
						echo "Imagem cadastrada com sucesso!";
					}
				}
				?>
			</label>
			<input type="text" name="nome" id="nome" placeholder="Digite o nome do produto">
			<br>
			<input type="text" name="descricao" id="descricao" placeholder="Digite a descrição do produto">
			<br>
			<input type="text" name="preco" id="preco" placeholder="Digite o preço do produto">
			<br>
			<input type="file" name="arquivo_imagem" id="arquivo_imagem" style="color: #000;">
			<br>
			<input type="submit" value="Cadastrar" name="cadastrar" id="cadastrar">
		</form>
	</div>
</body>

</html>