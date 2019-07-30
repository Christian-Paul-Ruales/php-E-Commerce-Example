<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reservation</title>
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
require_once './Controller/conexion.php';
?>

<?php
    $usu="";
    if(isset($_SESSION['Nombres'])){
        $usu=$_SESSION['Nombres']." ".$_SESSION['Apellidos'];
      }else{
        $usu="User has not logged in";
      
      }
    
      $fin = date("Y-m-d H:i:s");
     // echo "<br>".$fin;
    
    $select="select MAX(id_usuario) AS m from tiempo_pagina";
    $row=mysqli_query($con, $select);
    $fetch=mysqli_fetch_assoc($row);
    $id_last=$fetch['m'];
    //echo "<br>".$fetch['m'];
    $arre="select * from tiempo_pagina where id_usuario=".$id_last;
    //echo $id_last;
    $usar=mysqli_query($con, $arre);
    $las_user=mysqli_fetch_assoc($usar);
    
    //echo "<br>".$las_user['inicio'];
    //print_r($las_user);
    if(isset($_GET['var1'])){
        if($las_user['tiempo']=="" && $las_user['pagina']!="house detail"){
           // echo "Igualasos si o k";
            $inicio = date('Y-m-d H:i:s',strtotime($las_user['inicio']));
            //$inicio= ;
            $segundos = strtotime($fin) - strtotime($inicio);
           // echo "<br>s:" .$segundos;
            $sql2 = "UPDATE tiempo_pagina SET fin = '".$fin."', tiempo = '".$segundos."' WHERE tiempo_pagina.id_usuario = ".$id_last;
            //echo "<br>".$sql2;
            $usa=mysqli_query($con, $sql2);
        }
    
        $sql = "INSERT INTO tiempo_pagina (usuario, pagina, inicio, fin, tiempo) VALUES ('".$usu."', 'house detail','".$fin."', NULL, NULL)";
    $m1=mysqli_query($con, $sql);
    }
    

?>


<!--================Header Menu Area =================-->
<?php
                
                $total=1;
                $query_home="SELECT * FROM casa WHERE casa.id_casa=".$_GET['var1'];
                $result_home=mysqli_query($con,$query_home);

                $row_home=mysqli_fetch_assoc($result_home);
                $images=array();
                array_push($images,$row_home['imagen']);

                $query_roms="SELECT * FROM cuarto WHERE cuarto.casa_id=".$_GET['var1'];
                $result_roms=mysqli_query($con, $query_roms);
                while($row=mysqli_fetch_assoc($result_roms)){
                    array_push($images, $row['imagen']);
                }
                

            ?>
           
            
<!--================Hero Banner SM Area Start =================-->
<section class="hero-banner-sm magic-ball magic-ball-banner" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 0px -80px" data-top-bottom="background-position: 0 100px">
   

            
           
   
    <div class="container">
    
            <div class="table-responsive-md">
               
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <?php
                    for($i=0;$i<count($images);$i++){
                        if($i==0){
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'" class="active"></li>';
                        }else{

                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.$i.'"></li>';
                        }
                       
                    }
                
                ?>
                
                
            </ol>
            <div class="carousel-inner">
                <?php
                    for($i=0;$i<count($images);$i++){
                        if($i==0){
                            echo '<div class="carousel-item active">';
                            echo '<img class="d-block w-100" width="500px" height="400px"  src="'.$images[$i].'">';
                            echo '</div>';
                        }else{
                            echo '<div class="carousel-item">';
                            echo '<img class="d-block w-100" height="400px" src="'.$images[$i].'">';
                            echo '</div>';

                        }

                    }
                ?>
               
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>



            </div>
            <?php
            $v1=$_GET['var1'];
            $numberAdult=$_GET['n_a'];
            $numberChildren=$_GET['n_c'];
            $NumberBabies=$_GET['n_b'];
            $cost=$_GET['c_a'];
            $difference=$_GET['n_d'];
            $date1=$_GET['f_i'];
            $date2=$_GET['f_f'];
            ?>
            <form action="./buy.php?var1=<?php echo $v1; ?>&n_a=<?php echo $numberAdult; 
                           ?>&n_c=<?php echo $numberChildren; ?>&n_b=<?php echo $NumberBabies; 
                           ?>&c_a=<?php echo $cost; ?>&n_d=<?php echo $difference; ?>&f_i=<?php echo $date1; 
                           ?>&f_f=<?php echo $date2; ?>" method="post">
                
            <h1><?php echo $row_home['casa']; ?>
            <input class="btn btn-outline-primary btn-lg" type="submit" name="btnReservation" id="btnReservation" value="Reserve"> 
            </h1>
            <hr>
            
                  <p>  <?php
                        echo $row_home['detalle'];
                    
                    ?></p>
            <hr>
            <h4>Checkin and Chekout</h4>
            <table class="table table-bordered table-striped">
                    
                    <tbody>
                        

                        <tr>
                        
                        <th>Checkin: </th>
                        <td><?php echo $_GET['f_i']; ?></td>
                        <th>Checkout: </th>
                        <td><?php echo $_GET['f_f']; ?></td>
                        
                        </tr>
                    </tbody>
                </table>

                <h4>Costs + Required Services</h4>
                <table class="table table-bordered table-striped">
                    
                    <tbody>
                        

                        <tr>
                        
                        <th><?php echo $_GET['c_a'].'$ X '.$_GET['n_d'].' days'; ?> </th>
                        <?php 
                        $cost=$_GET['c_a']*$_GET['n_d'];
                        ?>
                        <td><?php echo $cost.'$'; ?></td>
                        
                        
                        </tr>

                        <tr>
                        
                        <th>Commission by service </th>
                        <?php 
                        $comission=2;
                        ?>
                        <td><?php echo $comission.'.00$'; ?>
                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#ModalComission" style="font-size:13px;width:30px;height:30px;border-radius: 50px;">
                            ?
                        </button>
                        </td>
                        
                        
                        </tr>
                        <?php
                        $aditional_services_query = "SELECT * FROM servicio WHERE servicio.casa_id=".$_GET['var1']." order by costo_adicional";
                            $resullt =mysqli_query($con,$aditional_services_query);
                            $cost_obligated=0;
                            while($row=mysqli_fetch_assoc($resullt)){
                                if($row['estado']=="required"){
                                    echo '<tr>';
                                    echo '<td>'.$row['detalle'].'</td>';
                                    if($row['costo_adicional']==0.00){
                                        echo '<td>Free
                                        <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Modalfree" style="font-size:13px;width:30px;height:30px;border-radius: 50px;">
                                        ?
                                    </button>
                                        
                                        </td>';
                                    }else{
                                        echo '<td>'.$row['costo_adicional'].
                                            ' <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Modalservice" style="font-size:13px;width:30px;height:30px;border-radius: 50px;">
                                                ?
                                            </button>'
                                        .'</td>';
                                    }
                                    
                                    echo '</tr>';
                                    $cost_obligated=$cost_obligated+$row['costo_adicional'];
                                }
                               
                            }
                            
                        ?>


                        




                    </tbody>
                </table>

                <h4>Optional Services</h4>
                <table class="table table-bordered table-striped">
                    
                    <tbody>
                        
                        <?php
                        $aditional_services_query = "SELECT * FROM servicio WHERE servicio.casa_id=".$_GET['var1']." order by costo_adicional";
                            $resullt =mysqli_query($con,$aditional_services_query);
                            $cost_optional=0;

                            $total=$cost+$comission+$cost_obligated;


                            while($row=mysqli_fetch_assoc($resullt)){
                                if($row['estado']=="optional"){
                                    echo '<tr>';
                                    echo '<td>';
                                    echo '<input type="checkbox" id="check_'.$row['detalle'].'" value="'.$row['detalle'].'" name="check_'.$row['detalle'].'" onclick=\'total_cost("'.$row['costo_adicional'].'","'.$row['detalle'].'")\'>';
                                    echo '</td>';
                                    echo '<td>';
                                     echo  '<label>'.$row['detalle'].'</label>';
                                     echo '</td>';
                                    echo '<td>'.$row['costo_adicional'].
                                    ' <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#Modaloptional" style="font-size:13px;width:30px;height:30px;border-radius: 50px;">
                                                ?
                                            </button>'
                                    .'</td>';
                                    echo '</tr>';
                                    $cost_optional=$cost_optional+$row['costo_adicional'];
                                    echo '</tr>';
                                }
                               
                            }
                            
                        ?>


                        




                    </tbody>
                </table>
                            

                            
                           
                           

                           <h4>Total: 
                            <input type="text" id="tc" name="tc" value="<?php    
                                echo $total;
                                             ?>" readonly>
                             </h4>

                            
                           
                            </div>
                            
                            
                            </form>
                           


            </div>

           
           
            
        

        
    </div>

    <?php include_once 'modals.php'; ?>
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



<script>
    function total_cost(val, detalle){
    var mos=document.getElementById("tc").value;
    

    if(document.getElementById("check_"+detalle).checked==true){
        
        var np=parseFloat(mos)+parseFloat(val);
    //document.getElementById("tc").innerHTML=np+"<br>"+document.getElementById(detalle).checked;
    document.getElementById("tc").value=parseFloat(np);

    }
    if(document.getElementById("check_"+detalle).checked==false){
        var np=parseFloat(mos)-parseFloat(val);
    //document.getElementById("tc").innerHTML=np+"<br>"+document.getElementById(detalle).checked;
    document.getElementById("tc").value=parseFloat(np);

    }


   
    }

    function guion(){
        var tam_card=document.getElementById("card_number").value.length;
        if(tam_card==1){
            if(document.getElementById("card_number").value=="4"){
                document.getElementById("tarjeta_credito").innerHTML="VISA";
            }
            if(document.getElementById("card_number").value=="5"){
                document.getElementById("tarjeta_credito").innerHTML="MASTER CARD";
            }
            if(document.getElementById("card_number").value=="6"){
                document.getElementById("tarjeta_credito").innerHTML="DISCOVERY CARD";
            }
        }
        if(tam_card==4 || tam_card==9 || tam_card==14){
            var actual=document.getElementById("card_number").value;
            document.getElementById("card_number").value=actual+"-";

        }
    }
</script>
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