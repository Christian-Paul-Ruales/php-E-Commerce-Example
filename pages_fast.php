<?php

include_once "./Controller/conexion.php";
require_once "./model/user.php";


        ?>

        

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chip Travel - Home</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/linericon/style.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/flat-icon/font/flaticon.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-shape">

  <!--================ Header Menu Area start =================-->
  <?php
  session_start();
  include_once 'nav_admins.php';

  ?>
  <!--================Header Menu Area =================-->
  
  

  <!--================Hero Banner Area Start =================-->
  <section class="hero-banner magic-ball">
    <div class="container">
  
      </div>
  </section>
  <!--================Hero Banner Area End =================-->
 <?php 
 
 ?>



  <!--================Service Area Start =================-->
  <section class="section-margin generic-margin">
    <div class="container">
   
    <table class="table">
  
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Web Page</th>
      <th scope="col">Start date</th>
      <th scope="col">Finish date</th>
      <th scope="col">Time (Seconds)</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $sql_searh='SELECT * FROM `tiempo_pagina`where fin IS NOT NULL and tiempo<=10';
    $mys=mysqli_query($con, $sql_searh);

    while($row=mysqli_fetch_assoc($mys)){
  ?>
    <tr>
      <th scope="row"><?php echo $row['id_usuario']; ?></th>
      <td><?php echo $row['usuario']; ?></td>
      <td><?php echo $row['pagina']; ?></td>
      <td><?php echo $row['inicio']; ?></td>
      <td><?php echo $row['fin']; ?></td>
      <td><?php echo $row['tiempo']; ?></td>
    </tr>
    <?php
    
        }
    ?>
    
  </tbody>
</table>
    <hr>    
    <h4>Unfinished actions</h4>

    <table class="table">
  
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Web Page</th>
      <th scope="col">Start date</th>
      <th scope="col">State</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $sql_searh='SELECT * FROM `tiempo_pagina`where fin IS NULL';
    $mys=mysqli_query($con, $sql_searh);

    while($row=mysqli_fetch_assoc($mys)){
  ?>
    <tr>
      <th scope="row"><?php echo $row['id_usuario']; ?></th>
      <td><?php echo $row['usuario']; ?></td>
      <td><?php echo $row['pagina']; ?></td>
      <td><?php echo $row['inicio']; ?></td>
      
      <td>Not Finished</td>
    </tr>
    <?php
    
        }
    ?>
    
  </tbody>
</table>



<?php
        
        $sql1 = "SELECT (SUM(total)/COUNT(total)) as media FROM `transacciones` WHERE transacciones.fin IS NOT NULL and transaccion=\"Inicio Sesion\"";
        $mys1=mysqli_query($con, $sql1);
        $row=mysqli_fetch_assoc($mys1);
        ?>
    </div>
  </section>
  <!--================Service Area End =================-->


  <!--================About Area Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-about">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-6 mb-4 mb-md-0">
          <div class="about-img">
            <img class="img-fluid" src="img/home/about-img.png" alt="">
          </div>
        </div>
        <div class="col-lg-5 col-md-6 align-self-center about-content">
          <h2>Exploration is <br class="d-none d-xl-block"> really the essence <br class="d-none d-xl-block"> of the human spirit</h2>
          <p>Make she'd moved divided air. Whose tree that replenish tone hath own upon them it multiply was blessed is lights make gathering so day dominion so creeping air was made.</p>
          <a class="button" href="#">Learn More</a>
        </div>
      </div>
    </div>
  </section>
  <!--================About Area End =================-->

  <!--================Tour section Start =================-->
  <section class="section-margin pb-xl-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="tour-card">
            <img class="card-img rounded-0" src="img/home/tour1.png" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="tour-content">
                <h2>We offer worldwise tour plan recently</h2>
                <p>Make she'd moved divided air. Whose tree that hath own upon them it multiply was blessed </p>
              </div>
            </div>
          </div>

          <div class="tour-card">
            <img class="card-img rounded-0" src="img/home/tour2.png" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-7">
          <div class="tour-card">
            <img class="card-img rounded-0" src="img/home/tour3.png" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-5">
          <div class="tour-card">
            <img class="card-img rounded-0" src="img/home/tour4.png" alt="">
            <div class="tour-card-overlay">
              <div class="media">
                <div class="media-body">
                  <h4>Paris tour offer</h4>
                  <small>5 days offer</small>
                  <p>We proper guided our tourist</p>
                </div>
                <div class="media-price">
                  <h4 class="text-primary">$65/day</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Tour section End =================-->


  <!--================Testimonial section Start =================-->
  <section class="bg-gray section-padding magic-ball magic-ball-testimonial pb-xl-5">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="img/home/section-icon.png" alt="">
        <h2>Our client says</h2>
        <p>Fowl have fruit moveth male they are that place you will lesser</p>
      </div>


      <div class="owl-carousel owl-theme testimonial pb-xl-5">
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="img/testimonial/t-slider1.png" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Daniel heart</h3>
                <p>Project manager, Nestle</p>
                <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="img/testimonial/t-slider1.png" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Daniel heart</h3>
                <p>Project manager, Nestle</p>
                <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
        <div class="testimonial__item">
          <div class="row">
            <div class="col-md-3 col-lg-2 align-self-center">
              <div class="testimonial__img">
                <img class="card-img rounded-0" src="img/testimonial/t-slider1.png" alt="">
              </div>
            </div>
            <div class="col-md-9 col-lg-10">
              <div class="testimonial__content mt-3 mt-sm-0">
                <h3>Daniel heart</h3>
                <p>Project manager, Nestle</p>
                <p class="testimonial__i">Also made from. Give may saying meat there from heaven it lights face had is gathered god earth light for life may itself shall whales made they're blessed whales also made from give may saying meat. There from heaven it lights face had</p>
                <span class="testimonial__icon"><i class="ti-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Testimonial section End =================-->


  <!--================Search Package section Start =================-->
  <section class="section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-xl-5 align-self-center mb-5 mb-lg-0">
          <div class="search-content">
            <h2>Search suitable <br class="d-none d-xl-block"> and affordable plan <br class="d-none d-xl-block"> for your tour</h2>
            <p>Make she'd moved divided air. Whose tree that replenish tone hath own upon them it multiply was blessed is lights make gathering so day dominion so creeping</p>
            <a class="button" href="#">Learn More</a>
          </div>
        </div>
        <div class="col-lg-6 col-xl-6 offset-xl-1">
          <div class="search-wrapper">
            <h3>Search Package</h3>

            <form class="search-form" action="#">
              <div class="form-group">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Recipient's username">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-search"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select name="category" id="category">
                  <option value="disabled" disabled selected>Category</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
              <div class="form-group">
                <select name="tourDucation" id="tourDuration">
                  <option value="disabled" disabled selected>Tour duration</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <input type="date" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="ti-notepad"></i></span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <select name="priceRange" id="priceRange">
                  <option value="disabled" disabled selected>Price range</option>
                  <option value="8 AM">8 AM</option>
                  <option value="12 PM">12 PM</option>
                </select>
              </div>
              <div class="form-group">
                <button class="button border-0 mt-3" type="submit">Search Package</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!--================Search Package section End =================-->


  <!--================Blog section Start =================-->
  <section class="section-padding bg-gray">
    <div class="container">
      <div class="section-intro text-center pb-90px">
        <img class="section-intro-img" src="img/home/section-icon.png" alt="">
        <h2>From our Blog</h2>
        <p>Fowl have fruit moveth male they are that place you will lesser</p>
      </div>

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="img/blog/blog-1.png" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
              </ul>
              <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="img/blog/blog-2.png" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
              </ul>
              <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
          <div class="card-blog">
            <img class="card-img rounded-0" src="img/blog/blog-3.png" alt="">
            <div class="card-blog-body">
              <a href="#">
                <h4>Forest responds to consultation smoking in al fresco.</h4>
              </a>
              <ul class="card-blog-info">
                <li><a href="#"><span class="align-middle"><i class="ti-notepad"></i></span>Jan 03, 2018</a></li>
                <li><a href="#"><span class="align-middle"><i class="ti-comments-smiley"></i></span>03 Comments</a></li>
              </ul>
              <p>Varius metus morbi ferme libero vehic on porta malesuada ut interdu estmales torquent vehicula parturient </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog section End =================-->


  <!-- ================ start footer Area ================= -->
  <footer class="footer-area">
    <div class="container">
      <div class="row">
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>About Agency</h6>
            <p>
              The world has become so fast paced that people don’t want to stand by reading a page of information to be  they would much rather look at a presentation and understand
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Navigation Links</h6>
            <div class="row">
              <div class="col">
                <ul>
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Feature</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Portfolio</a></li>
                </ul>
              </div>
              <div class="col">
                <ul>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>										
            </div>							
          </div>
        </div>							
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget">
            <h6>Newsletter</h6>
            <p>
              For business professionals caught between high OEM price and mediocre print and graphic output.									
            </p>								
            <div id="mc_embed_signup">
              <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscription relative">
                <div class="input-group d-flex flex-row">
                  <input name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                  <button class="btn bb-btn"><span class="lnr lnr-location"></span></button>		
                </div>									
                <div class="mt-10 info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-lg-3  col-md-6 col-sm-6">
          <div class="single-footer-widget mail-chimp">
            <h6 class="mb-20">InstaFeed</h6>
            <ul class="instafeed d-flex flex-wrap">
              <li><img src="img/instagram/i1.jpg" alt=""></li>
              <li><img src="img/instagram/i2.jpg" alt=""></li>
              <li><img src="img/instagram/i3.jpg" alt=""></li>
              <li><img src="img/instagram/i4.jpg" alt=""></li>
              <li><img src="img/instagram/i5.jpg" alt=""></li>
              <li><img src="img/instagram/i6.jpg" alt=""></li>
              <li><img src="img/instagram/i7.jpg" alt=""></li>
              <li><img src="img/instagram/i8.jpg" alt=""></li>
            </ul>
          </div>
        </div>						
      </div>

      <div class="footer-bottom">
        <div class="row align-items-center">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
<center>
    <a href="./admin.php" >
     Login (Only Admin)
    </a>
    </center>
  </footer>
  <!-- ================ End footer Area ================= --> 
  
  <script>
    var button =document.querySelector("button");
    var span=document.getElementById("spancount");
    function increment(){
      $span.value++;

    }

    function btn(){

      
    }
    button.addEventListener("click",increment);

    
   function add(ses,add){
     ses=parseInt(ses)+parseInt(add);
     document.writeln(ses);
    // return ses;

   }
      var reference = document.querySelector('.my-button');
    var popper = document.querySelector('.my-popper');
    var popperInstance = new Popper(reference, popper, {
      // popper options here
    });
      $(function () {
      $('.example-popover').popover({
        container: 'body'
      })
    })
    function peopleNumberCount(){

          var numberAdult=document.getElementById("NumberAdult").value;
          var numberChildren=document.getElementById("NumberChildren").value;
          var numberBabies=document.getElementById("NumberBabies").value;

          var guests=parseInt(numberAdult)+parseInt(numberChildren);

          messageguests=guests+" Guests, "+numberBabies+" Babies";

          document.getElementById("dropdownMenuButtonnp").innerHTML=messageguests;

    }
    function setDateFinal(){
      //arrival_date return date
        var arrival_date=document.getElementById("arrival_date").value;
        //var mydate = new Date(arrival_date.toString());

        document.getElementById("return_date").min=arrival_date;
        //alert(arrival_date)
        
    }
  
  </script>
  <script src="js/popper.js"></script>
  <script src="js/tooltip.js"></script>
  <script src="js/utils.js"></script>
  <script src="js/validate_search.js"></script>
  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>



