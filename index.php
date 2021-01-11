  <!DOCTYPE html>
  <?php include('conexao.php'); 
  
  ?>
  <html lang="zxx" class="no-js">
  <head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="codepixer">
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
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/magnific-popup.css">
      <link rel="stylesheet" href="css/nice-select.css">          
      <link rel="stylesheet" href="css/animate.min.css">
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">      
      <link rel="stylesheet" href="css/owl.carousel.css">
      <link rel="stylesheet" href="css/main.css">
      <style type="text/css">
        .error {
  border-color: #e8273b;
  color: #FFF;
  background-color: #ed5565;
}
      </style>
    </head>
    <body>

      <header id="header" id="home">
        <div class="container">
          <div class="row align-items-center justify-content-between d-flex">
            <div id="logo">
              <a href="index.php"><img src="img/logo.png" alt="" title="" /></a>
            </div>
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li class="menu-active"><a href="painel.php">Home</a></li>
                
                <li><a href="cars.php">Carros</a></li>
                
                
               
                <li><a href="sair.php">Sair</a></li> 
               
                <li>
                <a href="painel.php" class="fa fa-user-circle" aria-hidden="true"></a>
                <?php echo $_SESSION['nome']; ?>
              </li>                
              </ul>
            </nav><!-- #nav-menu-container -->            
          </div>
        </div>
      </header><!-- #header -->

      <?php 
      if(isset($_SESSION['msg'])){ 
        echo "<div class='alerta error'>";
        echo "<div class='erro'>";

        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      echo "</div></div>";
    }
      
      ?>
      <!-- start banner Area -->
      <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>  
        <div class="container">
          <div class="row fullscreen d-flex align-items-center justify-content-center">

            <div class="banner-content col-lg-7 col-md-6 ">
              <h6 class="text-white ">O ESSENCIAL PARA SUA VIAJEM</h6>
              <h1 class="text-white text-uppercase">
                Reserve um carro hoje!        
              </h1>

              <p class="pt-20 pb-20 text-white">
                ALUGUEL DE CARROS COM OS MELHORES PREÇOS
              </p>
              
            </div>
            <div class="col-lg-5  col-md-6 header-right">
              <h4 class="text-white pb-30">
Reserve seu carro hoje!</h4>
              <form class="form" role="form" autocomplete="off" method="post" action="validar2.php">
                <div class="form-group">
                  <?php
         $res = mysqli_query($conn,"select * from carros");
         echo "<select name='carro'>";
         echo "<option value=''>selecione seu carro</option>";
         while($escrever=mysqli_fetch_assoc($res)){
           echo '<option value='.$escrever["cod_car"].'>'. $escrever['mod_car'].' </option>';
      }
      echo "</select>"; 
      ?>
                  <div class="default-select" id="default-select"">
                    
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6 wrap-left">
                    <div class="default-select" id="default-select"">
                      <?php
         $res = mysqli_query($conn,"select * from cidades");
         echo "<select name='loc_local_locacao'>";
         echo "<option value=''>local de retirada</option>";
         while($escrever=mysqli_fetch_assoc($res)){
           echo '<option value='.$escrever["cod_cidade"].'>'. $escrever['nome_cidade'].' </option>';
      }
      echo "</select>"; 
      ?>
                    </div>
                  </div>
                  <div class="col-md-6 wrap-right">
                    <div class="input-group dates-wrap">                                          
                      <input id="comeco" class="dates form-control"  placeholder="Date & time" type="text" name="DataRetirada">                        
                      <div class="input-group-prepend">
                        <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6 wrap-left">
                    <div class="default-select" id="default-select"">
                      <?php
         $res = mysqli_query($conn,"select * from cidades");
         echo "<select name='loc_local_locacao2'>";
         echo "<option value=''>local de devoluçao</option>";
         while($escrever=mysqli_fetch_assoc($res)){
           echo '<option value='.$escrever["cod_cidade"].'>'. $escrever['nome_cidade'].' </option>';
      }
      echo "</select>"; 
      ?>
                    </div>
                  </div>
                  <div class="col-md-6 wrap-right">
                    <div class="input-group dates-wrap">                                              
                      <input id="final" class="dates form-control"  placeholder="Date & time" type="text" name="DataDevolucao">                        
                      <div class="input-group-prepend">
                        <span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6 wrap-left">
                    <div class="default-select" id="default-select">

                      <?php
    date_default_timezone_set('America/Sao_Paulo');
$date = date('H:i');


           $hora1 = strtotime($date) + 60*60;
           $dataHora = strftime('%H:%M', $hora1);
           
    

$hora = $dataHora;
echo "<select class='form-control' style='width:100px' name='hora1'>";
echo "<option value='' >hora de retirada</option>";
echo "<option value='$hora'>$hora</option>";
for($i = 0; $i < 45; $i++){
    $hora = date('H:i', strtotime('+30 minute', strtotime($hora)));
    echo "<option value='$hora'>$hora</option>";
}
echo "</select>";  
   ?>


                    </div>
                  </div>
                  <div class="col-md-6 wrap-right">
                    <div class="default-select" id="default-select">                                              
                      <?php
    $hora = '00:00';
echo "<select class='form-control' name='hora2'>";
echo "<option value=''>hora de devoluçao</option>";
echo "<option value='$hora'>$hora</option>";
for($i = 0; $i < 23; $i++){
    $hora = date('H:i', strtotime('+1 hours', strtotime($hora)));
    echo "<option value='$hora'>$hora</option>";
}
echo "</select>";   
   ?>                        
                      <div class="input-group-prepend">
                        </span></span>
                      </div>                      
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Confirme a reserva do carro</button>
                  </div>
                </div>
              </form>
            </div>                      
          </div>
        </div>          
      </section>
      <!-- End banner Area -->  

        

      <!-- Start home-about Area -->
      <section class="home-about-area" id="about">
        <div class="container-fluid">       
          <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 no-padding home-about-left">
              <img class="img-fluid" src="img/about-img.jpg" alt="">
            </div>
            <div class="col-lg-6 no-padding home-about-right">
              <h1>Melhores carros para a sua viajem</h1>
              <p>
                <span>Sem Complicação, Escolha o Modelo Ideal Para Você, Reserve Agora! Para Quem Busca Economia e Praticidade em um Só Lugar. Faça Já Sua Reserva!</span>
              </p>
              
              <a class="text-uppercase primary-btn" href="cars.php">ver detalhes</a>
            </div>
          </div>
        </div>  
      </section>
      


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
      <script src="script.js"></script>  
    </body>
    </html>
    



