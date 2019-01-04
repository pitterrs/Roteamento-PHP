<?php 
session_start();
require ('../conect.php');
require_once 'script.php';

$cadastrar = $_POST['enviar'];

if($cadastrar == 'cadastrar'){

	$nome  = $_POST['nome'];
	$telf  = $_POST['telefone'];
	$email  = $_POST['email'];
	$query = "INSERT INTO fornecedor (forn_nome, forn_tel, forn_email) value ('$nome', '$telf', '$email')";

	if($nome == '' && $telf == '' && $email == ''){
		$_SESSION['vazio'] = $vazio;
		header("Location: insertforn.php");
		exit;
	}

	if($nome == ''){
		$_SESSION['nome_vazio'] = $nome_vazio;
		header("Location: insertforn.php");
		exit;
	}

	if($email == ''){
		$_SESSION['email_vazio'] = $email_vazio;
		header("Location: insertforn.php");
		exit;
	}

	if($telf == ''){
		$_SESSION['login_vazio'] = $telf_vazio;
		header("Location: insertforn.php");
		exit;
	}
	
	$q = mysqli_query($cn, $query);

	if($q){
		$_SESSION['sucesso'] = $sucesso_forn;
		header("Location: insertforn.php");
	}else{
		$_SESSION['erro'] = $erro_forn;
		header("Location: insertforn.php");
	}

}elseif($cadastrar == 'listar'){
	header("Location: exibirforn.php?pagina=0");
	exit;
	}else{
		header("Location: home.php");
	}



 ?>