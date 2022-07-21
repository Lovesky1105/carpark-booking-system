
<html>
    <head>
        <title>Search user </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="colorlib.com">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet" />
        <link rel="stylesheet" href="assets/css/seccss.css">
        <link rel="stylesheet" href="assets/css/searchCSS.css">
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
  
  .table{
      width:100%;
    font-size: 20px;
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
              
             
              
         <div class="s130">
      <form action="search.php" method="POST">
        <div class="inner-form">
          <div class="input-field first-wrap">
            <div class="svg-wrapper">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
              </svg>
            </div>
            <input id="search" name="search" type="text" placeholder="Please enter Matrix Number for search: " />
          </div>
          <div class="input-field second-wrap">
            <button class="btn-search" type="submit" name="submit" >SEARCH</button>
          </div>
        </div>
        
      </form>
    </div>
              
                    
    <script src="js/extention/choices.js"></script>
    
    <div id="tooplate_content">
         
    <table class="table">
            <tr>
                <td>OrderID</td>
                <td>Matrix Number</td>
                <td>Number of place Booked</td>
                <td>Date (Start)</td>
                <td>Date (End)</td>
                <td>Time (Start)</td> 
                <td>Time (End)</td>
                <td>Number Hours</td> 
                <td>Price</td>
            </tr> 
    
        <?php


         
         if(isset($_POST['submit'])){
            $dbc=mysqli_connect("localhost","root","", "carpark");
         
            $search = $_POST['search'];
            
            $sql = "SELECT * FROM booking WHERE matrixNo = '$search' ";

            $result = $dbc->query($sql);

            if ($result->num_rows > 0){
            while($row = $result->fetch_assoc() ){
               
                   
                echo "<tr>";
                    echo "<td> ".$row["orderID"]."</td> "
                            . "<td> ".$row["matrixNo"]."</td> "
                            . "<td> ".$row["numBooking"]."</td> "
                            . "<td> ".$row["dateStart"]. " </td> "
                            ."<td> ".$row["dateEnd"]. " </td>"
                            . "<td>".$row["timeStart"]. " </td>"
                            ."<td> " .$row["timeEnd"]. "</td> " 
                            . "<td> " .$row["numHour"]. "</td>"
                            . "<td>  " .$row["price"]."</td>";
                    echo "</tr>";
                    
            }
            } else {
                    echo "0 records";
            }

            $dbc->close();
         
        
         }//end if isset
         
         ?>
         </table>
           
       </div>
    </div >
    </body>
</html>
