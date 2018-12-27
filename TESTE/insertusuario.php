<?php
$msg = '';
include("conect.php");
if($_POST){

	$nome  = $_POST['nome'];
	$email  = $_POST['email'];
	$login  = $_POST['login'];
	$query = "INSERT INTO usuario (usuario, email, login) value ('$nome', '$email', '$login')";
	
	$q = mysqli_query($cn, $query);

	if($q){
		$msg = 'Usuário cadastrado com sucesso';
	}else{
		$msg = 'Ocorreu um erro ao cadastrar o usuário';
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Usuário</title>
</head>
<body>
	<?php if($msg): ?>
	<p><?php echo $msg; ?></p>
	<?php endif; ?>
	<h3>Cadastro de Usuário</h3>
	<div>
		<form action="insertusuario.php" method="post">
			<label>Nome:</label> 
			<input type="text" name="nome" placeholder="Usuário" required><br><br>
			<label>E-mail:</label>
			<input type="text" name="email" placeholder="E-mail" required><br><br>
			<label>login:</label>
			<input type="text" name="login" placeholder="Ex: pitterrs" required><br><br>
			<button type="submit" value="Cadastrar">Cadastrar</button>
			<button><a href="exibirusuario.php" style="text-decoration: none; color: #000;">Lista de Usuários</a></button>
			<button><a href="index.php" style="text-decoration: none; color: #000;">Voltar</a></button>
		</form>
	</div>
</body>
</html>