<?php
if(isset($_POST['btnSignin'])){
$email=$_POST['inputEmail'];
$pass=$_POST['inputPassword'];
//echo $email."-".$pass;
include_once "./conexion.php";
require_once "../model/user.php";
$classUser=new user();
$query="Select * from usuario where correo='".$email."' and clave='".$pass."'";

$methodExecute=$classUser->ActionUser($query,$con);

if($methodExecute==mysqli_error($con)){
    echo "Ha ocurrido un error de conexion con nuestra base de datos";
}else{
    $count=mysqli_num_rows($methodExecute);
    if($count==1){
        session_start();
        $fetch=mysqli_fetch_assoc($methodExecute);
        foreach($fetch as $id=>$value){
            //echo $id.": ".$value."<br>";
            $_SESSION[$id]=$value;
        }
        echo '<script>';
        echo 'window.location="../view/usuario/index.php";';
        echo '</script>';
        
    }else{
        echo '<script>';
        echo 'window.location="../Login.php";';
        echo '</script>';

        echo '<script>';
        
        echo 'document.getElementById("error_ie").innerHTML="<FONT COLOR="red">error, password or user has not been found in our registry</FONT>";';
        echo '</script>';
    }
}
}else {
    echo "Usted ha recargado la pagina, es posible que esta funcion ya haya sido ejecutada";
}

?>