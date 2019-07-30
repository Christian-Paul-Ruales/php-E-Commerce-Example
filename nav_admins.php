<?php 
$pwd= getcwd();
                            
$directorios = explode("safario", $pwd);


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
                  
              
              </a></li> 
              
              <li class="nav-item submenu dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Efficiency</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="blog.html"></a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="succes.php">The time needed to successfully complete a transaction</a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="succestime.php">Number of transactions successfully completed in a
given period of time</a></li>

                      </ul>
                    </li>

              
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>

              <li class="nav-item submenu dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Effectiveness</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="blog.html"></a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="notCompleted.php">Number of daily transactions abandoned (not completed) by
end users</a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="logout.php">Usabilidad</a></li>

                      </ul>
                    </li>
             
                    
              <li class="nav-item submenu dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false">Understanding</a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="blog.html"></a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="pages_fast.php">Number of web pages accessed and quickly abandoned</a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="time_to_page.php">Time the user needs to go from a web page to other</a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="logout.php">Usabilidad</a></li>

                      </ul>
                    </li>
             
                      <li class="nav-item submenu dropdown">
                      <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"><?php echo $_SESSION['usuario']; ?></a>
                      <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="blog.html"></a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="logout.php">Exit</a></li>
                        <li name="logout" class="nav-item"><a class="nav-link" href="logout.php">Usabilidad</a></li>

                      </ul>
                    </li>





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