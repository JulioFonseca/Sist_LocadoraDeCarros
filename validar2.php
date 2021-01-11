<?php 
session_start();
include('conexao.php');




$_SESSION['DataRetirada']=$_POST['DataRetirada'];
$_SESSION['DataDevolucao']=$_POST['DataDevolucao'];
$_SESSION['carro']=$_POST['carro'];
$cod_cli=$_SESSION['cod'];
$carro=$_POST['carro'];
$datar=$_POST['DataRetirada'];
$datad=$_POST['DataDevolucao'];
$hora1=$_POST['hora1'];
$hora2=$_POST['hora2'];
$loc_locacao = $_POST['loc_local_locacao'];
$loc_locacao2 = $_POST['loc_local_locacao2'];


         $res = mysqli_query($conn,"select * from clientes where cod_clientes = $cod_cli ");
         while($escrever=mysqli_fetch_assoc($res)){
if($escrever['disponivel'] == '0'){

	

	$_SESSION['DataRetirada']=$_POST['DataRetirada'];
	$_SESSION['DataDevolucao']=$_POST['DataDevolucao'];
	$_SESSION['loc_locacao'] = $_POST['loc_local_locacao'];
	$cod_cli=$_SESSION['cod'];

	
	if ($conn->connect_error) {
		die("Connection failed: " . mysqli_connect_error());
	}	 
	$sql = "INSERT INTO locacao VALUES(NULL ,'$datar','$datad','$hora1','$hora2','$carro','$cod_cli','$loc_locacao','$loc_locacao2','')";


	if ((mysqli_query($conn, $sql)) ) {

	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);

	}

	mysqli_close($conn);
	$_SESSION['carro']=$_POST['carro'];
	$_SESSION['DataRetirada']=$_POST['DataRetirada'];
	$_SESSION['DataDevolucao']=$_POST['DataDevolucao'];
	$_SESSION['HoraDevolucao']=$_POST['hora1'];
	$_SESSION['HoraRetirada']=$_POST['hora2'];
	$_SESSION['loc_locacao']=$_POST['loc_local_locacao'];

	header("Location: service.php");
}else{	
			//Váriavel global recebendo a mensagem de erro
	$_SESSION['msg'] = "voçe ja alugou um veiculo";
	header("Location: painel.php");
}
	}
	
?>