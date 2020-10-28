<?php 

//checking condition for delete
if(!empty($_POST["path"])){
    
    //unlinking the path from the upload directory 
    if(unlink($_POST["path"])){
        echo "image deleted";
    }
}
?>