
<?php
// Start the session
session_start();
?>

<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="font.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
        <!-- Vendor CSS Files -->
        <link href="assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <!--end vendor css-->
        
        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        
    </head>
    <body>
        <?php 
        
                ini_set('display_errors', 0);
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
                
                echo'<div>   
            <img src="assets/projectIMG/intiLogo.png" alt="logo" width="100" height="120"/>
        </div>
        
            <div class="form-style-9" style="background-color: rgba(53,167,201,255)">
                
        <form action="login.php" method="post">
            <ul class="ul" style="background-color: rgba(53,167,201,255)">
                <li>
            <label for="matrixNo">Matrix No:</label><br>
            <input type="text" id="matrixNo" name="matrixNo" ><br></li>

            <li><label for="ps">Password:</label><br>
            <input type="password" id="ps" name="ps" ><br><br></li>
            
             <li><button name="submit" type="submit" id="submit">Log In</button>
                   <input type = "hidden" name = "submit" value = "true"></li>
            </ul>
        </form> 
        </div>';
                
        if(isset($_POST['submit'])){
				
				$matrixNo = $_POST['matrixNo'];
				$ps = $_POST['ps'];
				
				$dbc=mysqli_connect("localhost","root","");
				mysqli_select_db($dbc, "carpark");
				
				if(substr($matrixNo, 0, 1)=="S"){
											
					$result = mysqli_query($dbc, "Select * from user where matrixNo = '$matrixNo' and ps = '$ps'")
					or 
					die("Student ID Not Found" .mysqli_error($dbc));
					
					$row=mysqli_fetch_array($result);
					if ($row['matrixNo']== $matrixNo && $row['ps'] == $ps){
						echo"Login Successfully.";
						header('Location: homepage.html' );
											
						
						$_SESSION['identifier'] = $matrixNo;
								
					}
					else{
						echo"<h1 style='text-align: center'>ID or Password Incorrect</h1>";
					}
				}
				else if(substr($matrixNo, 0, 1)=="A"){
					
					$result = mysqli_query($dbc, "Select * from admin where matrixNo = '$matrixNo'and ps = '$ps'")
					or 
					die("Admin ID Not Found" .mysqli_error($dbc));
					
					$row=mysqli_fetch_array($result);
					if ($row['matrixNo']== $matrixNo && $row['ps'] == $ps){
						echo"Login Successfully.";
						header('Location: admindashboard.html' );
											
							
						$_SESSION['identifier']=$matrixNo;
								
					}
					else{
						echo"<h1 style='text-align: center'>ID or Password Incorrect</h1>";
					}
				}
				else{
					echo"<h1 style='text-align: center'>ID Not Found</h1>";
				}
			}
		?>
         
        
    
    </body>
</html>

