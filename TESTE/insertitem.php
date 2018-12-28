<?php
$msg = '';
include("conect.php");
if($_POST){

	$item  = $_POST['item'];
	$valor  = $_POST['valor'];
	$fornecedor  = $_POST['fornecedor'];
	$query = "INSERT INTO itens (item_nome, item_valor, forn_id_fk) value ('$item', '$valor', '$fornecedor')";
	
	$q = mysqli_query($cn, $query);

	if($q){
		$msg = 'Item cadastrado com sucesso';
	}else{
		$msg = 'Ocorreu um erro ao cadastrar o Item';
	}

}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Item</title>
</head>
<body>
	<?php if($msg): ?>
	<p><?php echo $msg; ?></p>
	<?php endif; ?>
	<h3>Cadastro de fornecedor</h3>
	<div>
		<form action="insertitem.php" method="post">
			<label>Nome do Item:</label>
			<input type="text" name="item" placeholder="Nome do item" required><br><br>
			<label>Valor:</label>
			<input type="text" name="valor" placeholder="Valor do item" required><br><br>
			<label>Fornecedor:</label>
			<select name="fornecedor">
				<option>Selecione</option>
				<?php
					$consulta = "SELECT * FROM fornecedor";
					$resultado = mysqli_query($cn, $consulta);
					while($row_resultado = mysqli_fetch_assoc($resultado)){ ?>
						<option value="<?php echo $row_resultado['forn_id']; ?>"><?php echo $row_resultado['fornecedor']; ?></option> <?php
						}
					?>
			</select><br><br>
			<button type="submit" value="Cadastrar">Cadastrar</button>
			<button><a href="exibiritem.php" style="text-decoration: none; color: #000;">Lista de Itens</a></button>
			<button><a href="index.php" style="text-decoration: none; color: #000;">Voltar</a></button>
		</form>
	</div>


</body>
</html>