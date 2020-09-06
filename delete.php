<?php 
   require("config/config.php");
   
  if (isset($_REQUEST['action']) && $_REQUEST['action'] == "deleteuser") {
       $id=$_REQUEST['delId'];
        $query="DELETE FROM users WHERE id=".$id;
        $result=  mysqli_query($conn,$query);
        if(!$result)
        {
           echo 0;
        }else{
            echo 1;
        }
    }
   
   
   
   
    
?>
