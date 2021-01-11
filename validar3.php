<?php 
session_start();
include('conexao.php');

//$calc = $_SESSION['calc'];
$datar=$_SESSION['DataRetirada'];
	$datad=$_SESSION['DataDevolucao'];
	$loc_locacao = $_POST['loc_local_locacao'];
	$_SESSION['carro']=$_POST['sele_car'];
	$sele_car=$_POST['sele_car'];
	$loc_locacao = $_SESSION['loc_locacao'];
	$cod_cli=$_SESSION['cod'];
	





if(isset($sele_car)){
	$datar=$_SESSION['DataRetirada'];
	$datad=$_SESSION['DataDevolucao'];
	$loc_locacao = $_POST['loc_local_locacao'];
	$_SESSION['carro']=$_POST['sele_car'];
	$sele_car=$_POST['sele_car'];
	$loc_locacao = $_SESSION['loc_locacao'];
	$cod_cli=$_SESSION['cod'];
	

	header("Location: protecao.php");

	if ($conn->connect_error) {
		die("Connection failed: " . mysqli_connect_error());
	}	 
	$sql = "UPDATE locacao SET cod_car= '$sele_car' WHERE cod_clientes = '$cod_cli' AND cod_cidade = '$loc_locacao' AND dt_loc = '$datar' AND dt_entr = '$datad' LIMIT 1";

	if ((mysqli_query($conn, $sql)) ) {

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}

	mysqli_close($conn);
}else{	
			//Váriavel global recebendo a mensagem de erro
	$_SESSION['msg'] = "Data invalida";
	header("Location: painel.php");
}

?>