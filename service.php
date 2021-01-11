	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
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
			<style type="text/css">
				
				.modal-window {
  position: fixed;
  background-color: rgba(200, 200, 200, 0.75);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  opacity: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.modal-window:target {
  opacity: 1;
  pointer-events: auto;
}

.modal-window>div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 2rem;
  background: #fff;
  color: #444;
}

.modal-window header {
  font-weight: bold;
}

.modal-close {
  color: #aaa;
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}

.modal-close:hover {
  color: #000;
}

.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}
			</style>
			
			
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="painel.php">Home</a></li>
                <li><a href="cars.php">Carros</a></li>
                <li><a href="sair.php">Sair</a></li> 
                <li>
                <a href="painel.php" class="fa fa-user-circle" aria-hidden="true"></a>
                
              </li>		          
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
								Serviços			
							</h1>	
							<p class="text-white link-nav"><a href="painel.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="service.php"> Serviços</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start feature Area -->
			<section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>Escolha sua protecão</h1>
							<p>
								Para uma viajem segura.
							</p>
						</div>
					</div>
							
	<form method="post" action="validar4.php">
		<table border="1" width="1000" class='table table-hover table-striped table-bordered'>
			<tr>
				<tr><td align="center">basica</td><td align="center">completa</td></tr>
				<td>
					<img src="https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/protecao-BAS.png">

					<span>R$ 28,00 POR DIA</span>
					<br>
					<a href="#open-modal1">detalhes</a>
<div id="open-modal1" class="modal-window">
  <div>
    <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
    <h1>basica</h1>
    <div>Proteção Básica (LDW): Proteção contra roubo, furto, incêndio, perda total, danos e/ou avarias causados exclusivamente ao veículo da molife.</div>
  </div>
</div>

					<input type="radio" name="protecao" value="28,00" checked="checked" >
				</td>

				<td>
					<img src="https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/protecao-COM.png">
					<span>R$ 43,00 POR DIA</span>

					<br>
					<a href="#open-modal2">detalhes</a>
<div id="open-modal2" class="modal-window">
  <div>
    <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
    <h1>Completa</h1>
    <div>Proteção Completa (Proteção Básica-LDW + Redução de Coparticipação + Benefício molife: Proteção contra Terceiros?ALI, sem custo adicional): Nesta tarifa, o cliente terá direito a Proteção Básica?LDW (Proteção contra roubo, furto, incêndio, perda total, danos e/ou avarias causados exclusivamente ao veículo da molife), porém, na hipótese da ocorrência de Evento Adverso, o valor de sua coparticipação correspondente ao grupo de veículo locado, será reduzido, conforme indicado no quadro de tarifas. Cabe ao cliente, no caso de Evento Adverso, arcar com a coparticipação no correspondente grupo do VEÍCULO,  até o limite dos valores estabelecidos no CONTRATO DE LOCAÇÃO.</div>
  </div>
</div>
					<input type="radio" name="protecao" value="43,00">
				</td>
			</tr>
			<tr>	
				<tr><td align="center">Super</td></tr>	
				<td>
					<img src="https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/protecao-SUP.png">
					<span>R$ 63,00 POR DIA</span>
					<br>
					<a href="#open-modal3">detalhes</a>
<div id="open-modal3" class="modal-window">
  <div>
    <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
    <h1>super</h1>
    <div>Super Proteção (Proteção Básica-LDW + Maior Redução de Coparticipação + Benefício molife: Proteção contra Terceiros e Ocupantes?ALI + PAI, sem custo adicional): Nesta tarifa, o cliente terá direito a Proteção Completa, porém o valor de sua coparticipação correspondente ao grupo de veículo, na hipótese de Evento Adverso, será ainda mais reduzida, conforme indicado no quadro de tarifas. Cabe ao cliente, no caso de Evento Adverso, arcar com a coparticipação no correspondente grupo do VEÍCULO, nos casos de morte ou invalidez permanente, procedentes de acidentes com o veículo locado, até o limite total estabelecido no respectivo campo do CONTRATO DE LOCAÇÃO e até o número máximo de ocupantes indicado para o tipo de veículo locado.</div>
  </div>
</div>
					<input type="radio" name="protecao" value="63,00">
				</td>
			</tr>
		</table>

		<h2> Acessórios e Serviços Adicionais(Opcional)</h2>

		<table width="1000" class='table table-hover table-striped table-bordered'>
			<tr>
				<tr><td align="center">GPS</td><td align="center">CADEIRA DE BEBÊ</td></tr>
				<td>
					<img src="https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t3_GPS.png">

					<span>R$ 15,00 POR DIA</span>
					<br>
					<a href="#open-modal4">detalhes</a>
<div id="open-modal4" class="modal-window">
  <div>
    <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
    <h1>GPS</h1>
    <div>Está à sua disposição o serviço de navegação por GPS, proporcionando comodidade e economia em suas viagens de negócios ou a lazer. Basta informar o endereço desejado que o navegador GPS irá traçar o melhor caminho para você chegar ao seu destino.</div>
  </div>
</div>

					<input type="checkbox" name="gps" value="15,00" >
				</td>

				<td>
					<img src="https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t3_CSS.png">
					<span>R$ 28,00 POR DIA</span>

					<br>
					<a href="#open-modal5">detalhes</a>
<div id="open-modal5" class="modal-window">
  <div>
    <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
    <h1>CADEIRA DE BEBÊ</h1>
    <div>Caso você precise transportar uma criança de até sete anos e meio de idade, é obrigatório o uso de dispositivo de retenção. Pensando nisso, a Movida possui cadeirinhas de bebê em suas locações.</div>
  </div>
</div>
					<input type="checkbox" name="cad_bb" value="28,00">
				</td>
			</tr>
			<tr>	
				<tr><td align="center">kit conectividade</td></tr>	
				<td>
					<img src="https://prdmovida.blob.core.windows.net/public/imagens/reserva/protecoes-e-itens/t3_MCNCT.png">
					<span>R$ 18,00 POR DIA</span>
					<br>
					<a href="#open-modal6">detalhes</a>
<div id="open-modal6" class="modal-window">
  <div>
    <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
    <h1>kit conectividade</h1>
    <div>Com o Kit conectividade, seu trajeto ficou mais prático, sem riscos de acidentes, multas por manuseio de celular em trânsito e, claro, com a bateria do seu smartphone sempre carregada para que você continue conectado e aproveite ainda mais sua experiência na Movida.</div>
  </div>
</div>
					<input type="checkbox" name="kit_conn" value="18,00" >
				</td>
			</tr>
		</table>
		<button type="submit" class="btn btn-pesquisa btn-large btn-block" id="submitPesquisa">Avançar

		</form> 		
					</div>
				</div>	
			</section>
			<!-- End feature Area -->				

									

			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	
						<p class="mt-50 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>											
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>	
			<script src="js/waypoints.min.js"></script>
			<script src="js/jquery.counterup.min.js"></script>					
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>
