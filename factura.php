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

<?php
    require_once './Controller/conexion.php';
    include_once 'nav.php';
    //echo $_SESSION['id_usuario'];
   // echo $_SESSION['Nombres'];
    $costo=$_POST['tc'];
    $comision=2;
    $valor_tarjeta=5;//porcentaje
    if($_POST['options']=="1"){
        $valor_tarjeta=($costo*3)/100;
    }
    if($_POST['options']=="3"){
        $valor_tarjeta=($costo*7)/100;
    }
    if($_POST['options']=="6"){
        $valor_tarjeta=($costo*14)/100;
    }
    if($_POST['options']=="12"){
        $valor_tarjeta=($costo*20)/100;
    }
    $total=$costo+$valor_tarjeta;

   // echo $costo."<br>";
    //echo $valor_tarjeta."<br>";
    //echo $total."<br>";
    //echo $_POST['options']."<br>";

    $code_facture = "INSERT INTO `factura` (`id_factura`, `usuario_id`, `casa_id`, `comision`, `costo`, `costo_tarjeta_credito`, `costo_final`, `meses`)"
    ." VALUES (NULL, '".$_SESSION['id_usuario']."', '".$_GET['var1']."', '".$comision."', '".$costo."', '".$valor_tarjeta."', '".$total."', '".$_POST['options']."')";

   if(mysqli_query($con,$code_facture)){
        echo "<br><br><br><hr><h1>Su factura ha sido ingresada con exito, a futuro podra guardar el estado de su tarjeta de credito</h1>";
        $sql = "select MAX(transacciones.id_usuario) AS p from transacciones";
        $myresult=mysqli_query($con, $sql);
        $quemasve=mysqli_fetch_assoc($myresult);
        $id=$quemasve['p'];
        //echo $id;
        $sql2 = "SELECT * FROM `transacciones` WHERE transacciones.id_usuario=".$id;
        $myresult2=mysqli_query($con, $sql2);
        $trans=mysqli_fetch_assoc($myresult2);
        $usu=$_SESSION['Nombres']." ".$_SESSION['Apellidos'];
        if($usu==$trans['usuario']){
            $hoy = date("Y-m-d H:i:s"); 
            $newformat = date('Y-m-d H:i:s',strtotime($trans['inicio']));
            //echo $newformat;
            $segundos = strtotime($hoy) - strtotime($newformat);
            //echo "<br>".$segundos;
            $sql_ = "UPDATE transacciones SET fin = '".$hoy."', total = '.$segundos.' WHERE transacciones.id_usuario = ".$id;
            $usa=mysqli_query($con, $sql_);
        }
        //

   }else{
       echo "<h1>Ha ocurrido un error, algo a fallado<h1>";
   }
   // if(mysqli_query($con,)){}
?>

  <?php
 
    $usu="";
    if(isset($_SESSION['Nombres'])){
        $usu=$_SESSION['Nombres']." ".$_SESSION['Apellidos'];
      }else{
        $usu="User has not logged in";
      
      }
    
      $fin = date("Y-m-d H:i:s");
      //echo "<br>".$fin;
    
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
    if(isset($_POST['btnbuy'])){
        if($usu==$las_user['usuario'] && $las_user['tiempo']=="" && $las_user['pagina']!="Finalized purchase"){
           // echo "Igualasos si o k";
            $inicio = date('Y-m-d H:i:s',strtotime($las_user['inicio']));
            //$inicio= ;
            $segundos = strtotime($fin) - strtotime($inicio);
            //echo "<br>s:" .$segundos;
            $sql2 = "UPDATE tiempo_pagina SET fin = '".$fin."', tiempo = '".$segundos."' WHERE tiempo_pagina.id_usuario = ".$id_last;
            //echo "<br>".$sql2;
            $usa=mysqli_query($con, $sql2);
        }
    
        $sql = "INSERT INTO tiempo_pagina (usuario, pagina, inicio, fin, tiempo) VALUES ('".$usu."', 'Finalized purchase','".$fin."', NULL, NULL)";
    $m1=mysqli_query($con, $sql);
    }
    

?>
  


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