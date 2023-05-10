<?php

$db = new mysqli("localhost", "icp049", "pedigs23", "icp049");
	
	if ($db -> connect_error) {
	   die ("Connection failed: " . $db -> connect_error);
	}

if(isset($_POST['submit'])){

     if(!empty($_POST['notecontent'])){

    

             $notecontent = $_POST['notecontent'];
          
            

             $query = "Insert into Notes(title) values ('$notecontent')";
   
          
             $run = mysqli_query($db,$query);

             header('location: login.php');

             

              
           
                
             echo "Form Submitted";
             
            
            
            
            
           
     }  
    else{

             header('location: createnote.html');


             echo "Form not submitted";
       
       

    }

 }
   


$db->close();

?>