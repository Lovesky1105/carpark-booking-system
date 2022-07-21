

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
    </head>
    
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
    <body>
    <!--header start-->
        <div class="navMenu">
             <div class="header">
                 
            <ul class="ul">
                 
              <li class="li"><img src="assets/projectIMG/intiLogo.png" alt="logo" width="100" height="60"/></li>
              <li class="li"><a class="active" href="homepage.html">Home</a></li>
              <li class="li"><a class="active" href="booking.php">Booking</a></li>
              <li class="li"><a class="active" href="price.php">price</a></li>
              <li class="li"><a class="active" href="contact.php">Contact</a></li>
              <li class="li"><a class="active" href="profile.php">Profile</a> </li>
              <li class="li" style="float:right;"><a class="active" href="logOut.php">Logout</a> </li>

            </ul>

                 </div>
            
            <!--header end-->
            
        <div class="form-style-9">
            
            <ul>
            <?php
            $dbc = mysqli_connect("localhost","root","");
            mysqli_select_db($dbc, "carpark");

            if(substr($_SESSION["identifier"], 0, 1)=="S"){
                $query="SELECT * FROM user WHERE matrixNo='".$_SESSION["identifier"]."' ";
            
            if($r = mysqli_query($dbc, $query ) ) {

                            while ($row=mysqli_fetch_array($r)){

                            echo'<img  src="assets/projectIMG/plogo.png" alt="person logo" width="100" height="120"/>';
                            print"<li>Name: {$row['name']}";
                            
                            print"<li>Class: {$row['class']}";
                            
                            print"<li>Phone: {$row['phone']}";
                            
                            print"<li>Matrix Number:{$row['matrixNo']} ";
                            print"<br></li>";
            
                            }//close if $r = mysqli_query($dbc, $query )
                            }//close  if(substr($_SESSION["identifier"], 0, 1)=="S")
                            }else{
                print'<p style="color:red;">Could not retrieve the data because :<br/>' .mysqli_error($dbc).
                '.</p><p>the query being run was : '.$query.'</p>';
        }
        
         mysqli_close($dbc);
            ?>
            </ul>
            <img class="bgimg" src="assets/projectIMG/carpark.png" alt="carpark"/>
        </div>
    </div>
    </body>
</html>
