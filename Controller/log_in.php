<?php
if(isset($_POST['btnSignin']) || (isset($_GET['em']) && isset($_GET['ps']))){
    $email="";
    $pass="";
if(isset($_POST['inputEmail']) && isset($_POST['inputPassword'])){
    $email=$_POST['inputEmail'];
    $pass=$_POST['inputPassword'];
}
if(isset($_GET['em']) && isset($_GET['ps'])){
    $email=$_GET['em'];
    $pass=$_GET['ps'];
}





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

        $sql = "select MAX(transacciones.id_usuario) AS p from transacciones";
        $myresult=mysqli_query($con, $sql);
        $quemasve=mysqli_fetch_assoc($myresult);
        $id=$quemasve['p'];
        //echo $id;
        $sql2 = "SELECT * FROM `transacciones` WHERE transacciones.id_usuario=".$id;
        $myresult2=mysqli_query($con, $sql2);
        $trans=mysqli_fetch_assoc($myresult2);
        //print_r($trans);
        $hoy = date("Y-m-d H:i:s"); 
        $newformat = date('Y-m-d H:i:s',strtotime($trans['inicio']));
        //echo $newformat;
        $segundos = strtotime($hoy) - strtotime($newformat);
        //echo "<br>".$segundos;
        


        session_start();
        $fetch=mysqli_fetch_assoc($methodExecute);
        foreach($fetch as $id_=>$value){
            //echo $id.": ".$value."<br>";
            $_SESSION[$id_]=$value;
        }
        $sql_ = "UPDATE transacciones SET usuario='".$_SESSION['Nombres']." ".$_SESSION['Apellidos']."', fin = '"
        .$hoy."', total = '.$segundos.' WHERE transacciones.id_usuario = ".$id;
        $usa=mysqli_query($con, $sql_);
        $_SESSION['chelp']=0;

     if(isset($_GET['var1'])){
        echo '<script>';
        echo 'window.location="../detalle.php?var1='.$_GET['var1'].'&n_a='.$_GET['n_a'].'&n_c='.$_GET['n_c'].
        '&n_b='.$_GET['n_b'].'&c_a='.$_GET['c_a'].'&n_d='.$_GET['n_d'].'&f_i='.$_GET['f_i'].'&f_f='.$_GET['f_f'].'";';
        echo '</script>';
     }else{
        echo '<script>';
        echo 'window.location="../index.php";';
        echo '</script>';
     }
        
        
    }else{
        echo '<script>';
        
        echo 'document.getElementById("error_ie").innerHTML="<FONT COLOR="red">error, password or user has not been found in our registry</FONT>";';
        echo '</script>';
        echo '<script>';
        echo 'window.location="../Login.php";';
        echo '</script>';

        
    }
}
}else {
    echo "Usted ha recargado la pagina, es posible que esta funcion ya haya sido ejecutada";
}

?>