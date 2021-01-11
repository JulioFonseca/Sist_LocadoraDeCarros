<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<?php include('conexao.php');  
		session_start();
		?>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Car Rentals</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="finalizando.php"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class='menu-active'><a href='finalizando.php'>Home</a></li>
									<li><a href='cadastro.php'>Cadastro</a></li>
									<li><a href='cars.php'>Carros</a></li> 
									<li><a href='login.php'>Login</a></li>
                
                
               
                 		          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Login			
							</h1>	
							<p class="text-white link-nav"><a href="finalizando.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="login.php"> login</a></p>
						</div>											
					</div>
				</div>
			</section>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include('conexao.php');  
	?>
	<title>Login</title>
	<!-- Bootstrap -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<!-- CSS -->
	<style type="text/css">
	.header-box{
		background-color: #f5f5f5;
		border: 1px solid #e3e3e3;
		height: 78px;
		line-height: 78px;
		margin-bottom: 20px;
	}
	.header-box h1{
		line-height: 78px;
		margin: 0px;
		padding: 0px;
		font-size: 26px;
	}

	.form-login{
		text-align: left;
		width: 300px;
	}
	.erro{
		vertical-align: middle;
		border: 1px solid #FFF;
		min-height: 72px;
		width: 300px;
	}


	label{
		margin-bottom: 0px;
	}</style>
</head>

<body>
	<center>
		
		<form action="validar.php" method="post" class="form-login">
			<?php	
			if(isset($_SESSION['msg'])){ 
				echo "<div class='erro'>";
				echo "<div class='alert alert-danger'>";

				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			echo "</div>";
		}
			
			?>

		</div>
		<label>Email:</label>
		<input type="text" required class="form-control" name="email" value=""/>
		<label>Senha:</label>
		<input type="password" required class="form-control" name="senha" />
		<br>
		<input type="submit" value="Login" class="btn btn-primary btn-block">
		<br>
		<span>Não tem conta? </span><a href="cadastro.php">CADASTRE-SE.</a>


	</form>
</center>
</body>
</html>
