<?php 
session_start();
require ('../conect.php');
require_once 'script.php';

$cadastrar = $_POST['enviar'];

if($cadastrar == 'cadastrar'){

	$nome  = $_POST['nome'];
	$valor  = $_POST['valor'];
	$fornecedor  = $_POST['fornecedor'];
	$query = "INSERT INTO itens (item_nome, item_valor, forn_id_fk) value ('$nome', '$valor', '$fornecedor')";

	if($nome == '' && $valor == '' && $fornecedor == ''){
		$_SESSION['vazio'] = $vazio;
		header("Location: insertitem.php");
		exit;
	}

	if($nome == ''){
		$_SESSION['desc_vazio'] = $desc_vazio;
		header("Location: insertitem.php");
		exit;
	}

	if($valor == ''){
		$_SESSION['valor_vazio'] = $valor_vazio;
		header("Location: insertitem.php");
		exit;
	}

	if($fornecedor == ''){
		$_SESSION['forn_vazio'] = $forn_vazio;
		header("Location: insertitem.php");
		exit;
	}
	
	$q = mysqli_query($cn, $query);

	if($q){
		$_SESSION['sucesso_item'] = $sucesso_item;
		header("Location: insertitem.php");
	}else{
		$_SESSION['erro_item'] = $erro_item;
		header("Location: insertitem.php");
	}

}elseif($cadastrar == 'listar'){
	header("Location: exibiritem.php?pagina=0");
	exit;
	}else{
		header("Location: home.php");
	}



 ?>