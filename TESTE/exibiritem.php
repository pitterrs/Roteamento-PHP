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
			<td>Nome do Item</td>
			<td>Valor do Item</td>
			<td>Fornecedor</td>
		</tr>
		<?php
		$consulta = "SELECT * FROM itens ";
		$resultado = mysqli_query($cn, $consulta);
		while($row = $resultado-> fetch_array()){ ?>
	    <tr>
	      <td><?php echo $row['item_id']; ?></td>
	      <td><?php echo $row['item_nome']; ?></td>
	      <td><?php echo $row['item_valor']; ?></td>
	      <td><?php echo $row['forn_id_fk']; ?></td>
	    </tr>
	    <?php } ?>
	</table><br>
	<button><a href="insertitem.php" style="text-decoration: none; color: #000;">Inserir novo Item</a></button>
</body>
</html>