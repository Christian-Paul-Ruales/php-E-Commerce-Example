<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php


include_once 'Controller/conexion.php';



?>

<?php
 
 
 
 

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
        
        <form class="form-signin" action="./admin_ver.php" method="post" role="form" onsubmit="return validar()">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            
            <input type="text" name="inputUser" id="inputUser" class="form-control" placeholder="Email address" autofocus="">
            <div id="error_ie"></div>
            <input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Password">
            <div id="error_pass"></div>
            <button name="btnSignin" class="btn btn-success btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            
            <hr>
            <!-- <p>Don't have an account!</p>  -->
        </form>

          
            <br>
            
    </div>
   
    <script src="./js/login_validate.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./js/loginScript.js"></script>
</body>
</html>