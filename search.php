<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form name="findHome" id="findHome" action="./alojamientos.php" method="get" onsubmit="return validate_search()">
 
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <input class="form-control" id="city" name="city" type="text" placeholder="City" title="City you want to travel to" value="<?php
                      if(isset($_GET['city'])){
                          echo $_GET['city'];

                      }else{

                          if(isset($_GET['var1'])){
                              $sql = "select country_city.descripcion from casa,country_city where casa.contry_city_id = country_city.id_country_city ".
                              "and casa.id_casa='".$_GET['var1']."'";
                              include_once './Controller/conexion.php';
                              $result=mysqli_query($con,$sql);
                              $row=mysqli_fetch_assoc($result);

                              echo $row['descripcion'];
                              
                          }
                      }
                      
                      
                      ?>" style="width: 175px;" >



              <input id="arrival_date" class="form-control" name="arrival_date" type="date" min="<?php 
                    $hoy=date("Y-m-d"); //echo $hoy; 
                   
                    $nuevafecha = strtotime ( '-1 day' , strtotime($hoy)) ;
                    $nuevafecha = date ( 'Y-m-d' , $nuevafecha );
                    echo $nuevafecha;
                    ?>" value="<?php
                        if(isset($_GET['arrival_date'])){
                            echo $_GET['arrival_date'];

                        }
                        if(isset($_GET['f_i'])){
                            echo $_GET['f_i'];
                        }
                    
                    ?>" title="date of you arrival/check in on the house you rent" style="width: 145px;">


                    <input id="return_date" class="form-control" name="return_date" type="date" onclick="setDateFinal()" title="Return date to your home (Check out)" value="<?php
                      
                      if(isset($_GET['return_date'])){
                          echo $_GET['return_date'];

                      }
                      if(isset($_GET['f_f'])){
                          echo $_GET['f_f'];
                      }
                    
                    ?>" style="width: 145px;">




                       
                <div class="dropdown">
                                <button value="5" class="form-control dropdown-toggle" type="button" name="dropdownMenuButtonnp" id="dropdownMenuButtonnp" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="With how many people do you travel? indicate it here">
                                  <?php
                                      $mensaje = "";
                                      if(isset($_GET['NumberAdult'])){
                                          
                                          $mensaje=($_GET['NumberAdult']+$_GET['NumberChildren'])." Guests, ".$_GET['NumberBabies'].' Babies';
                                          echo $mensaje;
                                      
                                      }
                                      if(isset($_GET['n_a'])){
                                          
                                          $mensaje=($_GET['n_a']+$_GET['n_c'])." Guests, ".$_GET['n_b'].' Babies';
                                          echo $mensaje;
                                      
                                      }

                                  ?>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButtonnp">
                                  
                                    <div class="form-group">
                                      Adults
                                      <input type="number" class="form-control" name="NumberAdult" id="NumberAdult" value="<?php
                                          if(isset($_GET['NumberAdult'])){
                                            echo $_GET['NumberAdult'];
                                          
                                          }
                                          if(isset($_GET['n_a'])){
                                              echo $_GET['n_a'];
                                          
                                          }
                                      
                                      ?>" onclick="peopleNumberCount()">
                                    </div>
                                    <div class="form-group">
                                      Children
                                      <input type="number" class="form-control" name="NumberChildren" id="NumberChildren" value="<?php
                                          if(isset($_GET['NumberChildren'])){
                                            echo $_GET['NumberChildren'];
                                          
                                          }
                                          if(isset($_GET['n_c'])){
                                              echo $_GET['n_c'];
                                          
                                          }
                                      
                                      ?>" onclick="peopleNumberCount()">
                                    </div>
                                    <div class="form-group">
                                      Babies
                                      <input type="number" class="form-control" name="NumberBabies" id="NumberBabies" value="<?php
                                          if(isset($_GET['NumberBabies'])){
                                            echo $_GET['NumberBabies'];
                                          
                                          }
                                          if(isset($_GET['n_b'])){
                                              echo $_GET['n_b'];
                                          
                                          }
                                      
                                      ?>" onclick="peopleNumberCount()">
                                    </div>
                                  
                                </div>
                </div>          
                      
                      <input type="submit" class="btn btn-outline-primary" name="btnSearchHome" id="btnSearchHome" value="FInd" >
                      
           
                    
             

      </div>

         
                    
    </div>
    
<!--
    <div class="container">
    <div class="row">
        <div class="col-sm-5">
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    
                    

                    
                    
                    <p id="err_city" class="help-block text-danger"></p>
                  </div>
                </div>
        </div>
        <div class="col-sm-4">
        
                    
         </div>
         <div class="col-sm-1">
         
         </div>
        
    </div>
    <div class="row">
        <div class="col-sm-5">
        
            
                   
                
                        
                   </div>
                   <div class="col-sm-5">
                      
                      <p id="err_dates" class="help-block text-danger"></p>
                      <p id="err_dates2" class="help-block text-danger"></p>
                    </div>
      
               
        
    </div>
    </div>-->
    </form>


    <script>
    function peopleNumberCount(){

          var numberAdult=document.getElementById("NumberAdult").value;
          var numberChildren=document.getElementById("NumberChildren").value;
          var numberBabies=document.getElementById("NumberBabies").value;

          var guests=parseInt(numberAdult)+parseInt(numberChildren);

          messageguests=guests+" Guests, "+numberBabies+" Babies";

          document.getElementById("dropdownMenuButtonnp").innerHTML=messageguests;

    }
    function setDateFinal(){
      //arrival_date return date
        var arrival_date=document.getElementById("arrival_date").value;
        //var mydate = new Date(arrival_date.toString());

        document.getElementById("return_date").min=arrival_date;
        //alert(arrival_date)
        
    }
  
  </script>
  <script src="js/validate_search.js"></script>

</body>
</html>

    