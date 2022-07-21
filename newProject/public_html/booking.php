
<html>
    <head>
        <title>Booking Page</title>
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
            
            
            <!--header end-->
        <div class="form-style-9">
            <h3>Fill-in the form to place the booking</h3>
            <form method="post" action="api/product/create.php">
                <ul>
                  
                    
                    <li> <label for="dateStart">Date(start): </label><br>
                <input type="date" id="dateStart" name="dateStart"><br></li>
               
                <li><label for="dateEnd">Date (end): </label><br>
                <input type="date" id="dateEnd" name="dateEnd"><br></li>
                
                <li><label for="timeStart">Time (start): </label><br>
                <input type="time" id="timeStart" name="timeStart"><br></li>
                
                <li><label for="timeEnd">Date (end): </label><br>
                <input type="time" id="timeEnd" name="timeEnd"><br></li>
                
                <p>Please select the number of carpark you want: </p>
                <select id="numBooking" name="numBooking">
                <?php
                    for ($i=1; $i<=100; $i++)
                    {
                        ?>
                          <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            
                        <?php
                    }
                ?>
                </select>
                
                
                <li><label for="numHour">Total Hours :</label><br>
                <input type="text" id="numHour" name="numHour"><br></li>
                
                   <li><input type="submit" value="submit"></li>
                
                </ul>
            </form>
            <img class="bgimg" src="assets/projectIMG/carpark.png" alt="carpark"/>
        </div>
         </div>
    </body>
</html>
