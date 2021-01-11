<?php
session_start();
include('conexao.php');  

if((isset($_POST['email'])) && (isset($_POST['senha']))){

	$usuario = $_POST['email'];
	$senha = $_POST['senha'];
	$_SESSION['usuario']= $_POST['email'];
	$result_usuario = "SELECT * FROM clientes WHERE email = '$usuario' AND senha = '$senha' ";
	$resultado_usuario = mysqli_query($conn, $result_usuario);
	$resultado = mysqli_fetch_assoc($resultado_usuario);

	if(isset($resultado)){
		
		$_SESSION['nome'] = $resultado['nome_cliente'];
		$_SESSION['id'] = $resultado['cod_clientes'];
		$_SESSION['usuarioEmail'] = $resultado['email'];
		if($_SESSION['email'] == $sresultado['email']){
			header("Location: painel.php");
			
		}else{	
			//Váriavel global recebendo a mensagem de erro
			$_SESSION['msg'] = "Usuário ou senha Inválido";
			header("Location: login.php");
		}
	//O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
	}else{
		$_SESSION['msg'] = "Usuário ou senha inválido";
		header("Location: login.php");
	}
}

?>	