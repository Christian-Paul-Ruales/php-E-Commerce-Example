<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Safario Travel - Contact</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">

    <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="vendors/flat-icon/font/flaticon.css">
    <link rel="stylesheet" href="vendors/nice-select/nice-select.css">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

<!--================ Header Menu Area start =================-->
<?php

include_once 'nav.php';

?>
<!--================Header Menu Area =================-->



<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
    <div class="container">
        <div class="hero-banner-sm-content">
            <h1>Alojamientos</h1>


            <?php
            include "Controller/conexion.php";
            $sql= "SELECT * FROM `country_city` , casa,cuarto
                  WHERE descripcion='Ecuador' 
                  and casa.contry_city_id=country_city.id_country_city 
                  And cuarto.casa_id=casa.id_casa";
            $query = $con->query($sql);
            while($row = $query->fetch_array()){

                $ruta=$row['imagen'];
                $id_casa=$row['id_casa'];
            ?>




            <table border="1">

                    <tr>
                        <td rowspan="3"><a href="detalle.php?var1=<?php echo $id_casa;?>"><img class="img-rounded" src="<?php echo $ruta; ?>" width="300"/></a> </td>


                        <td><?php echo ''.$row['casa'].''?></td>
                    </tr>

                    <tr>
                        <td><?php echo ''.$row['detalle'].''?></td>
                    </tr>

                <tr>
                    <td><?php echo ''.$row['valoracion'].''?></td>
                    <td>_________</td>
                    <td>_________</td>
                    <td><?php echo ''.$row['costo'].''?></td>

                </tr>

                <tr>

                    <td>...</td>
                </tr>

                <tr>

                    <td>....</td>
                </tr>
            </table>

                <?php
            }
            ?>

        </div>
    </div>
</section>
<!--================Hero Banner SM Area End =================-->



<!-- ================ contact section start ================= -->

<!-- ================ contact section end ================= -->





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
</footer>
<!-- ================ End footer Area ================= -->




<script src="vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
<script src="vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="js/jquery.form.js"></script>
<script src="js/jquery.validate.min.js"></script>
<script src="js/contact.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/skrollr.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>