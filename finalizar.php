<!DOCTYPE html>
  <html lang="zxx" class="no-js">
  <?php include('conexao.php'); ?>
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
                Finalizar    
              </h1> 
              <p class="text-white link-nav"><a href="finalizando.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="service.php"> serviços</a><span class="lnr lnr-arrow-right"></span><a href="finalizar.php"> finalizar</a> </p>
            </div>                      
          </div>
        </div>
      </section>


 
 <body>
   <form method="post" action="finalizar.php">
    <table align="center" border='1'></table>


    <?php
    session_start();

    $carro=$_SESSION['carro'];
    $loc_locacao = $_SESSION['loc_locacao'];   
    $datar=$_SESSION['DataRetirada'];
    $datad=$_SESSION['DataDevolucao'];
    $horad=$_SESSION['HoraDevolucao'];
    $horar=$_SESSION['HoraRetirada'];
    $cod_cli=$_SESSION['cod'];
    



    echo "<h2>SEU ITINERÁRIO </h2><br>
    <table align='center' border='1' width='1000' class='table table-hover table-striped table-bordered' >";

    $res = mysqli_query($conn,"SELECT * from locacao as l, carros as c WHERE l.cod_clientes = '$cod_cli' AND l.cod_cidade = '$loc_locacao' AND l.dt_loc = '$datar' AND l.dt_entr = '$datad' AND c.cod_car = '$carro' LIMIT 1");  

    while($escrever=mysqli_fetch_assoc($res)){

     echo "<tr>";
     echo "
     <td> <img src='". $escrever['imagem']."'> ".$escrever['mod_car']."</td> 
     ";






     $cad_bb=$_SESSION['cadeira'];
     $kit_conn=$_SESSION['kit'];
     $gps=$_SESSION['gps'];
     $protecao=$_SESSION['protecao'];

     $d1 = strtotime($datad); 
     $d2 = strtotime($datar);

     $dataFinal = ($d2 - $d1) /86400;

     if($dataFinal < 0)
      $diaria = $dataFinal * -1;
    if ($diaria > 0) {
      
    $preco_car= $escrever['prec_car'];

    $calc = $preco_car * $diaria;
    
    }else{
    $diaria = 1;
    $preco_car= $escrever['prec_car'];
    $calc = $preco_car;
    }

//escrever




    if ($escrever['cod_cidade']=='1'  AND $escrever['cod_cidade_dev']=='2') {
        // fortaleza e sobral
      $distancia =  232 * 1.2;
      

      if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
        $total=0;
        @$total = $distancia + ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

        echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
      }else{

       $total=0;
       @$total= $distancia +($protecao*$diaria) + $calc;

       echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
     }
   }
   else if ($escrever['cod_cidade']=='1'  AND $escrever['cod_cidade_dev']=='3') {
        // fortaleza e quixada
    $distancia =  (1.2)*(171);
    echo "distanciass" .$distancia;
    if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
      $total=0;
      @$total = $distancia + ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

      echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
    }else{

     $total=0;
     @$total= $distancia +($protecao*$diaria) + $calc;

     echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
   }
 }else if ($escrever['cod_cidade']=='2'  AND $escrever['cod_cidade_dev']=='1') {
        // quixada e fortaleza
  $distancia =  171*1.2;
  if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
    $total=0;
    @$total = $distancia + ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

    echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
  }else{

   $total=0;
   @$total= $distancia +($protecao*$diaria) + $calc;

   echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
 }
}else if ($escrever['cod_cidade']=='2'  AND $escrever['cod_cidade_dev']=='3') {
        // quixada e sobral
  $distancia =  256*1.2;
  if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
    $total=0;
    @$total = $distancia + ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

    echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
  }else{

   $total=0;
   @$total= $distancia +($protecao*$diaria) + $calc;

   echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
 }
}else if ($escrever['cod_cidade']=='3'  AND $escrever['cod_cidade_dev']=='1') {
        // sobral e fortaleza
  $distancia =  232*1.2;
  if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
    $total=0;
    @$total = $distancia + ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

    echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
  }else{

   $total=0;
   @$total= $distancia +($protecao*$diaria) + $calc;

   echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
 }
}else if ($escrever['cod_cidade']=='3'  AND $escrever['cod_cidade_dev']=='2') {
        // sobral e quixada
  $distancia =  256*1.2;
  if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
    $total=0;
    @$total = $distancia + ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

    echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
  }else{

   $total=0;
   @$total= $distancia +($protecao*$diaria) + $calc;

   echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
 }
 }else if ($escrever['cod_cidade']=='1'  AND $escrever['cod_cidade_dev']=='1') {
        // fortaleza e fortaleza
  
  if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
    $total=0;
    @$total = ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

    echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
  }else{

   $total=0;
   @$total= ($protecao*$diaria) + $calc;

   echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
 }
}
else if ($escrever['cod_cidade']=='2'  AND $escrever['cod_cidade_dev']=='2') {
        // quixadá e quixada
  
  if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
    $total=0;
    @$total = ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

    echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
  }else{

   $total=0;
   @$total= ($protecao*$diaria) + $calc;

   echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
 }
}
else if ($escrever['cod_cidade']=='3'  AND $escrever['cod_cidade_dev']=='3') {
        // sobral e sobral
  
  if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
    $total=0;
    @$total = ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

    echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
  }else{

   $total=0;
   @$total= ($protecao*$diaria) + $calc;

   echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
 }
}
if (isset($horar) AND isset($horad)) {
  
}



   //  if (isset($cad_bb) OR isset($kit_conn) OR isset($gps)) {
   //      $total=0;
   //      @$total = ($protecao*$diaria) + ($cad_bb*$diaria) + ($kit_conn*$diaria) + ($gps*$diaria) + $calc;

   //      echo "<td> Preço a pagar: <br> " .$total."R$<br> </td>";
   //  }else{

   //     $total=0;
   //     @$total= ($protecao*$diaria) + $calc;

   //     echo "<td> Preço a pagar: <br> " .$total."<br> </td>";
   // }

echo "<td> RETIRADA:<br> " .$escrever['dt_loc'] .$escrever['cod_cidade']."<br> ".$horar ."Hrs </td>";
echo "<td> DEVOLUÇAO:<br> " .$escrever['dt_entr'].$escrever['cod_cidade_dev']."<br> ".$horad ."Hrs </td>";
echo "</tr>" ;
echo "</table>"; 
}
?>
<script type="text/javascript">
  function Nova()
  {
    window.location.replace("painel.php");
  }
</script>

<input type="button" class="btn btn-pesquisa btn-large btn-block" name="" value="Finalizar Compra" onClick="Nova();">

</form>



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
<?php
echo "Preço a pagar: " .$total;
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}    
$sql = "UPDATE locacao SET prec_total= '$total' WHERE cod_clientes = '$cod_cli' AND cod_cidade = '$loc_locacao' AND dt_loc = '$datar' AND dt_entr = '$datad'";


if ((mysqli_query($conn, $sql)) ) {

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
if ($conn->connect_error) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql2 = "UPDATE clientes SET disponivel= '1' WHERE cod_clientes = '$cod_cli' ";

if ((mysqli_query($conn, $sql2)) ) {

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);

}
mysqli_close($conn);
?>
