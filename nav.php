<?php 
$pwd= getcwd();
 //echo $pwd;                           
$directorios = explode("Rent a house", $pwd);

if($directorios[1]==""){
  session_start();
}
?>
<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        
        <?php
        //echo $pwd;
            if($directorios[1]=="\\view\\usuario"){
              echo '<a class="navbar-brand logo_h" href="../../index.php"><img src="../../img/ecuador.png"> TravelEC</a>';
            }else{
              echo '<a class="navbar-brand logo_h" href="index.php"><img src="./img/ecuador.png"> TraveEC</a>';
            }
        ?>
          
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item"><a class="nav-link">
                  <?php
                    if(isset($_GET['city']) || isset($_GET['var1'])){
                      include './search.php';
                    }
                
                  ?>
              
              </a></li> 
              

              
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              <?php
              
                
              
                
                  //echo $pwd;
                  if(isset($_SESSION["correo"])){

                  //  echo '<a class="button" href="logout.php">Exit</a>';
                    ?>
                      <li class="nav-item submenu dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"><?php echo $_SESSION['Nombres']; ?></a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="blog.html">My Acount</a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="logout.php">Exit</a></li>
                      </ul>
                    </li>


                    <?php



                  }

                  ?>



            </ul>

          
         
            <div class="nav-right text-center text-lg-right py-4 py-lg-0">
            
            <?php
            if(!isset($_SESSION["correo"])){
              echo '<a class="button" href="login.php">Login/Register</a>';

            }
            
            ?>
            
          </div> 
       
      </nav>
    </div>
  </header>