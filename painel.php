<?php
session_start();

if(isset($_SESSION['id'])){
	include('conexao.php');
$nome=$_SESSION['nome'];
	$res = mysqli_query($conn,"SELECT * from clientes WHERE nome_cliente = '$nome' LIMIT 1");
         while($escrever=mysqli_fetch_assoc($res)){
           if ($escrever["cod_clientes"]==$_SESSION['id']) {	
           

	include('index.php');
           }else{

           	$_SESSION['msg'] = "Usuário Já tem locacao";
	header("Location: login.php");
          	 
      }
           }
	$nome=$_SESSION['nome'];
	$res = mysqli_query($conn,"SELECT * from clientes WHERE nome_cliente = '$nome' LIMIT 1"); 
			while($escrever=mysqli_fetch_assoc($res)){
			$_SESSION['cod']=$escrever['cod_clientes'];
			}
//colocar alert
	if(isset($_SESSION['msg'])){ 
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
			
	}
	
}else{
	$_SESSION['msg'] = "Usuário ou senha Inválido";
	header("Location: login.php");	
}
 
?>