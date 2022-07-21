<?php
					  
session_start();			
 
?>

<html>
    <head>
        <title>Profile</title>
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
       
       <style>
            
            .rbox{
      border: 1px solid;
      padding: 10px;
      box-shadow: 5px 10px;
      box-sizing: border-box;
      background-color:#ff9999;
      margin-top: 50px;
      margin-left:  10px;
      margin-right: 10px;
  }

  .wbox{
      border: 1px solid;
      padding: 10px;
      box-shadow: 5px 10px;
      box-sizing: border-box;
      background-color:#ffffff;
      margin-top: 50px;
      margin-left:  10px;
      margin-right: 10px;
  }
  
  .buttons{
    width:180px;
    height:30px;
    font-size: 10px;
  }
        </style>
        
    </head>
    <body>
        
            <div class="navMenu">
                <div class="header">
           <ul class="ul">
                 
               <li class="li"><img src="assets/projectIMG/intiLogo.png" alt="logo" width="100" height="60"/></li>
              <li class="li"><a class="active" href="admindashboard.html">Admin Dashboard Page</a></li>
              <li class="li"><a class="active" href="add.html">Add User Page</a></li>
              <li class="li"><a class="active" href="data.php">Data Analytic Page</a></li>
              <li class="li"><a class="active" href="search.php">Search User</a></li>
              <li class="li"><a class="active" href="adminProfile.php">Profile</a> </li>
              <li class="li" style="float:right;"><a class="active" href="logOut.php">Logout</a> </li>
               
             
            </ul> 
        </div>
            <!--header end-->
            
            <div class="form-style-9">
            <ul>
                <?php
                
                $dbc = mysqli_connect("localhost","root","");
                mysqli_select_db($dbc, "carpark");
                
                if(substr($_SESSION["identifier"], 0, 1)=="A"){
                $query="SELECT * FROM admin WHERE matrixNo='".$_SESSION["identifier"]."' ";
                
                if($r = mysqli_query($dbc, $query ) ) {
                 while ($row=mysqli_fetch_array($r)){

                            echo'
                            <img  src="assets/projectIMG/plogo.png" alt="person logo" width="100" height="120"/>';
                            
                            echo "";
                            echo" <li>Name: {$row['name']}<br></li>";
                            echo"<li>Phone: {$row['phone']}</li>";
                            echo "<li>Class: {$row['class']}<br></li>";
                            echo"<li>Matrix Number {$row['matrixNo']}<br></li>";

                            
                            }
                }else{
                print'<p style="color:red;">Could not retrieve the data because :<br/>' .mysqli_error($dbc).
                '.</p><p>the query being run was : '.$query.'</p>';
                }
                }
                mysqli_close($dbc);
                ?>      
            </ul>
                 <img class="bgimg" src="assets/projectIMG/carpark.png" alt="carpark"/>
</div>
        
    </body>
</html>



