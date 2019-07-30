function validate_search(){
    var cont=0;
    var city=document.getElementById("city").value;
    var arrive_date=document.getElementById("arrival_date").value;
    var return_date=document.getElementById("return_date").value;
     
    if(city.length==0 || /^\s+$/.test(city)){
        
        document.getElementById("err_city").innerHTML="You have not entered any city/country";
        document.getElementById("city").style.borderColor="red";
        cont = cont + 1;
    }else{
        document.getElementById("err_city").innerHTML="";  
        document.getElementById("city").style.borderColor="#ced4da";
    }

    if(arrive_date.length==0 || /^\s+$/.test(arrive_date)){
        
        document.getElementById("err_dates").innerHTML="Arrival Date not selected";
        document.getElementById("arrival_date").style.borderColor="red";
        cont = cont + 1;
    }else{
        document.getElementById("err_dates").innerHTML="";  
        document.getElementById("arrival_date").style.borderColor="#ced4da";
    }


    if(arrive_date.length==0 || /^\s+$/.test(arrive_date)){
        
        document.getElementById("err_dates").innerHTML="Arrival Date not selected";
        document.getElementById("arrival_date").style.borderColor="red";
        cont = cont + 1;
    }else{
        document.getElementById("err_dates").innerHTML="";  
        document.getElementById("arrival_date").style.borderColor="#ced4da";
    }

    if(return_date.length==0 || /^\s+$/.test(return_date)){
        
        document.getElementById("err_dates2").innerHTML="Return Date not selected";
        document.getElementById("return_date").style.borderColor="red";
        cont = cont + 1;
    }else{
        document.getElementById("err_dates2").innerHTML="";  
        document.getElementById("return_date").style.borderColor="#ced4da";
    }



    var numberAdult=document.getElementById("NumberAdult").value;
          var numberChildren=document.getElementById("NumberChildren").value;
          var numberBabies=document.getElementById("NumberBabies").value;

          if(numberAdult<=0){
            document.getElementById("err_people").innerHTML="You have to travel at least one adult";
            document.getElementById("dropdownMenuButtonnp").style.borderColor="red";
            cont = cont+1;
          }else{
            document.getElementById("err_people").innerHTML="";
            document.getElementById("dropdownMenuButtonnp").style.borderColor="#ced4da";

          }






    if(cont==0){

        return true;
    }else{
        return false;
    }

}