<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="index.php"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li> 
              <li class="nav-item"><a class="nav-link" href="about.php">About</a></li> 
              <li class="nav-item"><a class="nav-link" href="package.php">Packages</a>
              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="amentities.php">Amentities</a>                 
                </ul>
							</li>

              <li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Blog</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="blog.html">Blog Single</a></li>
                  <li class="nav-item"><a class="nav-link" href="blog-details.html">Blog Details</a></li>
                </ul>
							</li>
              <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
              <?php
              
                $pwd= getcwd();
                            
                $directorios = explode("safario", $pwd);
              
                if($directorios[1]==""){
                  session_start();
                }
                  
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
          </div> 
        </div>
      </nav>
    </div>
  </header>