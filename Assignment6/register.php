<?php

$db = new mysqli("localhost", "icp049", "pedigs23", "icp049");
	
	if ($db -> connect_error) {
	   die ("Connection failed: " . $db -> connect_error);
	}

if(isset($_POST['submit'])){

     if(!empty($_POST['email']) && !empty($_POST['uname']) && !empty($_POST['pswd'])){

    

             $email = $_POST['email'];
             $uname = $_POST['uname'];
             $pswd = $_POST['pswd'];

             $query = "Insert into Users(email,screenname,password) values ('$email','$uname','$pswd')";
   
          
             $run = mysqli_query($db,$query);

             header('location: login.php');

             

              
           
                
             echo "Note Submitted";
             
            
            
            
            
           
     }  
    else{

             header('location: createnote.html');


             echo "Form not submitted";
       
       

    }

 }
   


$db->close();

?>