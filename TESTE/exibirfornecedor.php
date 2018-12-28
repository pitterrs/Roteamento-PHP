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
			<td>Fornecedor</td>
			<td>Telefone</td>
			<td>E-mail</td>
		</tr>
		<?php
		$consulta = "SELECT * FROM fornecedor ";
		$resultado = mysqli_query($cn, $consulta);
		while($row = $resultado-> fetch_array()){ ?>
	    <tr>
	      <td><?php echo $row['forn_id']; ?></td>
	      <td><?php echo $row['fornecedor']; ?></td>
	      <td><?php echo $row['forntel']; ?></td>
	      <td><?php echo $row['fornemail']; ?></td>
	    </tr>
	    <?php } ?>
	</table><br>
	<button><a href="insertforn.php" style="text-decoration: none; color: #000;">Inserir novo Usuário</a></button>
</body>
</html>