<?php 
session_start();
require ('../conect.php');
require_once 'script.php';

$cadastrar = $_POST['enviar'];

if($cadastrar == 'modificar'){
	$id  = $_POST['id'];
	$nome  = $_POST['nome'];
	$valor  = $_POST['valor'];
	$fornecedor  = $_POST['fornecedor'];
	$query = "UPDATE itens SET item_nome='$nome', item_valor='$valor', forn_id_fk='$fornecedor' WHERE item_id = '$id'";

	$q = mysqli_query($cn, $query);
	header("Location: exibiritem.php?pagina=0");
	exit;
	
}else{
	header("Location: exibiritem.php?pagina=0");
	exit;
	}
?>