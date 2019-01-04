<?php 
session_start();
require ('../conect.php');
require_once 'script.php';

$cadastrar = $_POST['enviar'];

if($cadastrar == 'cadastrar'){

	$nome  = $_POST['nome'];
	$email  = $_POST['email'];
	$login  = $_POST['login'];
	$query = "INSERT INTO usuario (usuario, email, login) value ('$nome', '$email', '$login')";

	if($nome == '' && $email == '' && $login == ''){
		$_SESSION['vazio'] = $vazio;
		header("Location: insertuser.php");
		exit;
	}

	if($nome == ''){
		$_SESSION['nome_vazio'] = $nome_vazio;
		header("Location: insertuser.php");
		exit;
	}

	if($email == ''){
		$_SESSION['email_vazio'] = $email_vazio;
		header("Location: insertuser.php");
		exit;
	}

	if($login == ''){
		$_SESSION['login_vazio'] = $login_vazio;
		header("Location: insertuser.php");
		exit;
	}
	
	$q = mysqli_query($cn, $query);

	if($q){
		$_SESSION['sucesso'] = $sucesso;
		header("Location: insertuser.php");
	}else{
		$_SESSION['erro'] = $erro;
		header("Location: insertuser.php");
	}

}elseif($cadastrar == 'listar'){
	header("Location: exibiruser.php?pagina=0");
	exit;
	}else{
		header("Location: home.php");
	}



 ?>