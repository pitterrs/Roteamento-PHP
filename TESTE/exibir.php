<?php
require ('conect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Usuários</title>
</head>
<body>

	<table border="1">
		<tr>
			<td>Código</td>
			<td>Nome</td>
			<td>E-mail</td>
			<td>Login</td>
		</tr>
		<?php
		$consulta = "SELECT * FROM usuario ";
		$resultado = mysqli_query($cn, $consulta);
		while($row = $resultado-> fetch_array()){ ?>
	    <tr>
	      <td><?php echo $row['id']; ?></td>
	      <td><?php echo $row['usuario']; ?></td>
	      <td><?php echo $row['email']; ?></td>
	      <td><?php echo $row['login']; ?></td>
	    </tr>
	    <?php } ?>
	</table><br>
	<button><a href="index.php" style="text-decoration: none; color: #000;">Inserir novo Usuário</a></button>
</body>
</html>