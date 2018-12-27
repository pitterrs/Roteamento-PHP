<?
require_once 'addregistro.class.php';

if(isset($_POST['rotear']) == 'cadastrar'){
	$registro = $_POST[registro];
	$data = $_POST[data];
	$analista = $_POST[analista];




	if($registro != NULL && $analista != NULL){

			$dados->InsertRegistro($registro, $data, $analista);

	}else{
		header('Location: index.php?alert=1');
	}


 }else{
	header('Location: index.php');
}
