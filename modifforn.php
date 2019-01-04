<?php 
session_start();
require ('../conect.php');
require_once 'script.php';

$cadastrar = $_POST['enviar'];

if($cadastrar == 'modificar'){
	$id  = $_POST['id'];
	$nome  = $_POST['nome'];
	$telefone  = $_POST['fone'];
	$email  = $_POST['email'];
	$query = "UPDATE fornecedor SET forn_nome='$nome', forn_tel='$telefone', forn_email='$email' WHERE forn_id = '$id'";

	$q = mysqli_query($cn, $query);
	header("Location: exibirforn.php?pagina=0");
	exit;
	
}else{
	header("Location: exibirforn.php?pagina=0");
	exit;
	}
?>