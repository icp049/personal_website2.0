<?php

$db = new mysqli("localhost", "icp049", "pedigs23", "icp049");
	
	if ($db -> connect_error) {
	   die ("Connection failed: " . $db -> connect_error);
	}

if(isset($_POST['submit'])){

     if(!empty($_POST['notecontent'])){

    

             $notecontent = $_POST['notecontent'];
            

             $query = "INSERT INTO Contributions(contribution) values ('$notecontent')";
   
          
             $res = mysqli_query($db,$query);

             header('location: viewcontributepages.php');

             

              
           
                
        
           
     }  
    else{

             header('location: viewcontributepages.php');


         
       
       

    }

 }
   


$db->close();

?>