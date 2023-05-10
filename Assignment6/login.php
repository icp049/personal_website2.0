<?php


session_start();

?>


<?php

$db = new mysqli("localhost", "icp049", "pedigs23", "icp049");
	
	if ($db -> connect_error) {
	   die ("Connection failed: " . $db -> connect_error);
	}

    
  

?>

   




<!DOCTYPE html>
<html lang = "en">
<head>

    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
    <link rel = "stylesheet" href = "notelist.css">
</head>
<body>



<h2> Welcome <?php echo $_SESSION['screenname']; ?></h2>
Click here to <a href = "logout.php">Logout</a>



<button class = "createbutton" onclick = "window.location.href = 'createnote.html';">CREATE A NEW NOTE</button>

<hr>



          

      <section>

        <div class = "container">


      
         

       


        
            
            
            <h2> Existing Notes </h2> 
            <hr>
            
            
            <?php
    
            $sql= "SELECT * FROM Notes";
            $res = mysqli_query($db,$sql);
            
            
            while ($fetch = mysqli_fetch_assoc($res)){
      
             echo '
             <div id = "notes">

                   <div id = "note" class="notes">
    
                   <h3 class = "note-title">'.$fetch["title"].'</h3>
                  
   
    
              <button class ="note-btn" onClick = "myFunction()"> View Note</button>
              <button class ="note-btn"> Access</button>

              <br>
             

           
               
                
    
                </div>




            </div>
            
            ';

          
        }  
         ?>

           

        </div>





      </section>
      <script>
         function myFunction() {
         window.location.href="viewcontributepage.php";
        }
        </script>



</body>
</html>




