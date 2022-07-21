<?php
					  
session_start();			
 
?>

<html>
    <head>
        <title>Price</title>
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
    <body class="body">
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
            
             <!-- ======= Hero Section ======= -->
        <section id="hero">
            <h1>Inti booking carpark system</h1>
           <h2>Here To See Your Booking History And Your Pirce</h2>
        </section><!-- End Hero -->
            
            <div>
                
            <!--header end-->
            <?php
			$dbc = mysqli_connect("localhost","root","");
				mysqli_select_db($dbc, "carpark");
                                
                                if(substr($_SESSION["identifier"], 0, 1)=="S"){
					
					$query="SELECT * FROM booking WHERE matrixNo ='".$_SESSION["identifier"]."'";
                                        
                                        if($r = mysqli_query($dbc, $query ) ) {
					
						while ($row=mysqli_fetch_array($r)){
							
							print "<table cellspacing=5 border=0px style='margin:0px auto;'>";
                                                                print "<tr>";
									print "<td style='font-size: 22px;'> Order ID {$row['orderID']} </td>";
								print "</tr>";
                                                                
								print "<tr>";
									print "<td style='font-size: 22px;'> Number of carpark booked : {$row['numBooking']} </td>";
								print "</tr>";
								
								print "<tr>";
									print "<td style='font-size: 22px;'> Matrix Number : {$row['matrixNo']} </td>";
								print "</tr>";
								
								print "<tr>";
									print "<td style='font-size: 22px;'> Date Start : {$row['dateStart']} </td>";
								print "</tr>";
								
								print "<tr>";
									print "<td style='font-size: 22px;'> Date End : {$row['dateEnd']} </td>";
								print "</tr>";
								
								print "<tr>";
									print "<td style='font-size: 22px;'> Time Start : {$row['timeStart']} </td>";
								print "</tr>";
								
								print "<tr>";
									print "<td style='font-size: 22px;'> Time End : {$row['timeEnd']} </td>";
								print "</tr>";
                                                                
                                                                print "<tr>";
									print "<td style='font-size: 22px;'> Number of Hour : {$row['numHour']} </td>";
								print "</tr>";
                                                                
                                                                print "<tr>";
									print "<td style='font-size: 22px;'> Price : RM {$row['price']} </td>";
								print "</tr>";
								
								print"<br/><hr/>";
								
							print "</table>";
							
							
						}
						
					}else{
						
						print'<p style="color:red;">Could not retrieve the data because :<br/>' .mysqli_error($dbc).
						'.</p><p>the query being run was : '.$query.'</p>';
					}
					
					mysqli_close($dbc);
                                }
                                
            ?>
        
            
             </div>
    </body>
</html>
