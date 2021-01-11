<?php 
session_start();
$protecao = $_POST['protecao'];
@$cad_bb=$_POST['cad_bb'];
@$kit_conn=$_POST['kit_conn'];
@$gps=$_POST['gps'];
@$protecao=$_POST['protecao'];
//$calc = $_SESSION['calc'];
if(isset($protecao)){
	$datar=$_SESSION['DataRetirada'];
	$datad=$_SESSION['DataDevolucao'];
	$carro=$_SESSION['carro'];
	
	$_SESSION['cadeira']=$_POST['cad_bb'];
	$_SESSION['kit']=$_POST['kit_conn'];
	$_SESSION['gps']=$_POST['gps'];
	$_SESSION['protecao']=$_POST['protecao'];

	$_SESSION['DataRetirada'];
	$_SESSION['DataDevolucao'];
	$_SESSION['loc_locacao'];
	
	
	$loc_locacao = $_SESSION['loc_locacao'];
	$cod_cli=$_SESSION['cod'];

	header("Location: finalizar.php");

	
}else{	
			//Váriavel global recebendo a mensagem de erro
	$_SESSION['msg'] = "Data invalida";
	header("Location: painel.php");
}

?>