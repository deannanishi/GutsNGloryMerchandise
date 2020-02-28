<?php 
include_once "./includes/db-connection.php";
include_once "./web-service/get-data.php";
include_once "./web-service/brain.php";
?>
<!DOCTYPE html>
<html lang="en">
   <?php include "./includes/head.php"?>
  
    <body>
        <header>
			<img class= "logo" src="img/logo.png">
			<nav class= "large">	
				<?php include "./includes/nav.php"?>
			</nav>
		</header>
        	<nav class= "small">	
				<?php include "./includes/nav.php"?>
			</nav>
        <main>
           <h1>Online Store</h1>
           <br>
            <div class="container">
                <div class="row text-center">

                <?php
                    if(isset($markUp)){
                        echo $markUp;
                    }
                ?>    
                </div>
            </div>    
        </main>
        	<?php include "./includes/footer.php"?>
    </body>
</html>