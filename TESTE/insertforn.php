<?php
$msg = '';
include("conect.php");
if($_POST){

	$fornecedor  = $_POST['fornecedor'];
	$forntel  = $_POST['forntel'];
	$fornemail  = $_POST['fornemail'];
	$query = "INSERT INTO fornecedor (fornecedor, forntel, fornemail) value ('$fornecedor', '$forntel', '$fornemail')";
	
	$q = mysqli_query($cn, $query);

	if($q){
		$msg = 'Fornecedor cadastrado com sucesso';
	}else{
		$msg = 'Ocorreu um erro ao cadastrar o fornecedor';
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Fornecedor</title>
</head>
<body>
	<?php if($msg): ?>
	<p><?php echo $msg; ?></p>
	<?php endif; ?>
	<h3>Cadastro de fornecedor</h3>
	<div>
		<form action="insertforn.php" method="post">
			<label>Nome do Fornecedor:</label>
			<input type="text" name="fornecedor" placeholder="Nome do Fornecedor" required><br><br>
			<label>Telefone:</label>
			<input type="text" name="forntel" placeholder="telefone do fornecedor" required><br><br>
			<label>E-mail:</label>
			<input type="text" name="fornemail" placeholder="E-mail do fornecedor" required><br><br>
			<button type="submit" value="Cadastrar">Cadastrar</button>
			<button><a href="exibirfornecedor.php" style="text-decoration: none; color: #000;">Lista de Fornecedores</a></button>
			<button><a href="index.php" style="text-decoration: none; color: #000;">Voltar</a></button>
		</form>
	</div>


</body>
</html>