<?php 
session_start();
require ('../conect.php');
require_once 'script.php';

$cadastrar = $_POST['enviar'];

if($cadastrar == 'modificar'){
	$id  = $_POST['id'];
	$nome  = $_POST['nome'];
	$email  = $_POST['email'];
	$login  = $_POST['login'];
	$query = "UPDATE usuario SET usuario='$nome', email='$email', login='$login' WHERE id = '$id'";

	$q = mysqli_query($cn, $query);
	header("Location: exibiruser.php?pagina=0");
	exit;
	
}else{
	header("Location: exibiruser.php?pagina=0");
	exit;
	}
?>