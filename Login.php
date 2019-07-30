<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php

$usu="";
include_once 'Controller/conexion.php';
if(isset($_SESSION['Nombres'])){
  $usu=$_SESSION['Nombres']." ".$_SESSION['Apellidos'];
  echo "<script>";
  echo' window.location="./index.php"';
  echo "<script>";
}else{
  $usu="User has not logged in";

}
$hoy = date("Y-m-d H:i:s"); 
$sql = "INSERT INTO `transacciones` (`id_usuario`, `usuario`, `transaccion`, `inicio`, `fin`, `total`) VALUES (NULL, '".$usu."', 'Inicio Sesion', '".$hoy."', NULL, NULL)";
mysqli_query($con,$sql);



?>

<?php
 
 
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
 
     if($usu==$las_user['usuario'] && $las_user['tiempo']=="" && $las_user['pagina']!="Log in"){
        // echo "Igualasos si o k";
         $inicio = date('Y-m-d H:i:s',strtotime($las_user['inicio']));
         //$inicio= ;
         $segundos = strtotime($fin) - strtotime($inicio);
         //echo "<br>s:" .$segundos;
         $sql2 = "UPDATE tiempo_pagina SET fin = '".$fin."', tiempo = '".$segundos."' WHERE tiempo_pagina.id_usuario = ".$id_last;
         //echo "<br>".$sql2;
         $usa=mysqli_query($con, $sql2);
     }
 
     $sql = "INSERT INTO tiempo_pagina (usuario, pagina, inicio, fin, tiempo) VALUES ('".$usu."', 'Log in','".$fin."', NULL, NULL)";
 $m1=mysqli_query($con, $sql);
 
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style2.css">
    <title>Login/Register Form</title>
</head>
<body>
    <div id="logreg-forms">
        <?php
        $enlace="./Controller/log_in.php";
        if(isset($_GET['var1'])){
            $enlace =$enlace.'?var1='.$_GET['var1'].'&n_a='.$_GET['n_a'].'&n_c='.$_GET['n_c'].
            '&n_b='.$_GET['n_b'].'&c_a='.$_GET['c_a'].'&n_d='.$_GET['n_d'].'&f_i='.$_GET['f_i'].'&f_f='.$_GET['f_f'].'';
        }


        ?>
        <form class="form-signin" action="<?php echo $enlace; ?>" method="post" role="form" onsubmit="return validar()">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR  </p>
            <input type="text" name="inputEmail" id="inputEmail" class="form-control" placeholder="Email address" autofocus="">
            <div id="error_ie"></div>
            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password">
            <div id="error_pass"></div>
            <button name="btnSignin" class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i> Sign up New Account</button>
        </form>

            <form action="/reset/password/" class="form-reset">
                <input type="email" id="resetEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
                <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <?php
                $enlace2="./Controller/userController.php";
                if(isset($_GET['var1'])){
                    $enlace2 =$enlace2.'?var1='.$_GET['var1'].'&n_a='.$_GET['n_a'].'&n_c='.$_GET['n_c'].
                    '&n_b='.$_GET['n_b'].'&c_a='.$_GET['c_a'].'&n_d='.$_GET['n_d'].'&f_i='.$_GET['f_i'].'&f_f='.$_GET['f_f'].'';
                }

            ?>
            
            <form action="<?php echo $enlace2; ?>" method="post" class="form-signup" role="form" onsubmit="return validate_register()">
                <div class="social-login">
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>
                </div>
                <div class="social-login">
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>
                </div>
                
                <p style="text-align:center">OR</p>

                <input type="text" name="username" id="username" class="form-control" placeholder="Names: Ej: Christian Paul" >
                <div id="errorUserName"></div>
                <input type="text" name="userlastname" id="userlastname" class="form-control" placeholder="Last names">
                <div id="errorUserLastName"></div>
                <input type="text" name="useremail" id="useremail" class="form-control" placeholder="Email address">
                <div id="errorUserEmail"></div>
                <input type="password" name="userpass" id="userpass" class="form-control" placeholder="Password">
                <div id="errorUserPass"></div>
                <input type="password" name="userrepeatpass" id="userrepeatpass" class="form-control" placeholder="Repeat Password">
                <div id="errorUserRepeatPass"></div>
                <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
                <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
            </form>
            <br>
            
    </div>
   
    <script src="./js/login_validate.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/loginScript.js"></script>
</body>
</html>