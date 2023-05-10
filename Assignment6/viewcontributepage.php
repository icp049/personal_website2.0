
<?php

$db = new mysqli("localhost", "icp049", "pedigs23", "icp049");
	
	if ($db -> connect_error) {
	   die ("Connection failed: " . $db -> connect_error);
	}

    
  

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset = "UTF-8">
        <title>View/Contribute Page</title>
        <link rel = "stylesheet" href = "vcpage.css">
    </head>
    <body>
          <header>
            
          
          <?php
    
            $sql= "SELECT * FROM Notes";
            $res = mysqli_query($db,$sql);
            
            
        
      
             echo '
            
                  
                <div class = "container">
                <div id = "notes">
                  
                    <div id = "note">
                        <h3 class = "notetitle">"$title"</h3>
                       

                        


                    </div>
                </div>

            
            </div>
            ';
            
            ?>
          </header>

          <section>
            <div class = "container2">
               
            
            <form action = "viewcontributepages.php" method = "post" name = "form">
                <textarea name = "notecontent" id = "notecontent" placeholder = "Type Note Here" cols= "70" rows = "10"></textarea>  
                <br> 
                <div id = "content_error"> You exceeded the 1500 character limit</div>

                <p> Character Count: <b id = "character-count">0</b></p>
                <div id = "remainingchar">1500 Characters Remaining</div>
                <hr>
                <button type = "submit" name = "submit">Submit</button>

            </form>

        </div>
            
           

          </section>
         <script src = "vcpage.js"></script> 
    </body>


</html>