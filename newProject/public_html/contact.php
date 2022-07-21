<?php
include 'mail.php';
?>
<html>
    <head>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="font.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
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
        
        <div class="box"><br/>
            
            <img class="bgimg" src="assets/projectIMG/carpark.png" alt="carpark"/>
        </div>
            <h2 style="text-align: center;">
                Contact Us
            </h2>
            <br>
             <div class="form-style-9">
            <ul>
              <li>
                <b>Address: 1-Z, Lebuh Bukit Jambul, Bukit Jambul, 11900 Bayan Lepas, Pulau Pinang
            </li>
            <li>Phone: 04 1234569</li></b>
            </ul>
                 </div>
            
            <div class="form-style-9">
                
            <ul>  
            <form method="post" action="mail.php">
               
                    <li> <label for="title">Title: </label><br>
                <input type="text" id="title" name="title" size="20" ><br></li>
               
                <li><label for="comment">Comment</label><br>
                <input type="text" id="comment" name="comment" size="40"><br></li>
                
                <li><label for="email">Your personal E-mail</label><br>
                <input type="text" id="email" name="email" size="40"><br></li>
                
                   <li><button name="submitted" type="submitted" id="submitted">Submit</button></li>
                   <input type = "hidden" name = "submitted" value = "true">
            </form>
            </ul>
                
    </div>
     </div>
     <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
     
    </body>
</html>



                    

                    


                    
   