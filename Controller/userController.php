<?php

$name=$_POST["username"];
$lastname=$_POST["userlastname"];
$pass=$_POST["userpass"];
$repeatpass=$_POST["userrepeatpass"];

$email=$_POST["useremail"];

//$id_house=$_GET["c"];

include_once "./conexion.php";
require_once "../model/user.php";

$classUser=new user();
$sql = "INSERT INTO `usuario` (`id_usuario`, `Nombres`, `Apellidos`, `clave`, `correo`) VALUES (NULL, '".$name."', '".$lastname."', '".$pass."', '".$email."')";

$metodExecute=$classUser->ActionUser($sql,$con);

if($metodExecute==mysqli_error($con)){
    echo "No se ha podido ingresar el usuario: ".$metodExecute;
}else{
    echo "Usuario Ingresado con exito";
    $enlace___="./log_in.php?em=".$email."&ps=".$pass;
    if(isset($_GET['var1'])){
        $enlace___=$enlace___.'&var1='.$_GET['var1'].'&n_a='.$_GET['n_a'].'&n_c='.$_GET['n_c'].
        '&n_b='.$_GET['n_b'].'&c_a='.$_GET['c_a'].'&n_d='.$_GET['n_d'].'&f_i='.$_GET['f_i'].'&f_f='.$_GET['f_f'].'';
    }
    echo '<script>';
        echo 'window.location="'.$enlace___.'";';
    echo '</script>';





}

?>