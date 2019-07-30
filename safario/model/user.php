<?php
class user{
    
    function ActionUser($QUERY,$con){
        if($result=mysqli_query($con,$QUERY)){
            return $result;
        }else{
            echo "Ha ocurrido un error ".mysqli_error($con);
            return mysqli_error($con);
        }
        
    }
}

?>