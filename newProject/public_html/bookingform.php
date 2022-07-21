
<?php

if(
    
    !empty($_POST['numBooking']) &&
    !empty($_POST['dateStart']) &&
    !empty($_POST['dateEnd']) &&
    !empty($_POST['timeStart']) &&
    !empty($_POST['timeEnd']) &&
    !empty($_POST['numHour'])   
){
	
        $dateStart=$_POST['dateStart'];
	$dateEnd=$_POST['dateEnd'];
        $timeStart=$_POST['timeStart'];
        $timeEnd=$_POST['timeEnd'];
        $numbooking = $_POST['numBooking'];
	$numHour = $_POST['numHour'];
        $price = $numHour*1.5;
        
        $dateStart = date("Y-m-d H:i:s"); 
        $dateEnd = date("Y-m-d H:i:s"); 
        
        //$dateTimeStart = date("YYYY-MM-DD ", $dateStart);  
        //$dateTimeEnd = date("YYYY-MM-DD ", $dateEnd);  

	$dbc=mysqli_connect("localhost","root","");
	mysqli_select_db($dbc, "carpark");
		
	session_start();
	$identifier=$_SESSION['identifier'];
        
        $query = "SELECT * FROM booking WHERE dateStart = '$dateStart' AND timeStart= '$timeStart' AND timeEnd= '$timeEnd' AND numBooking= '$numbooking' ";
       
        
        if( $r = mysqli_query($dbc, $query )){
        
          echo"Sorry this number of carpark at this time slot already booked. Please book for others carpark. Thank you.";
        
       echo " <a href='booking.php'>Click here</a> return booking page...";
        
        }else{
            $queryInsert = mysqli_query($dbc, "INSERT INTO booking(numBooking, matrixNo, dateStart, dateEnd, timeStart, timeEnd, numHour, price)
									VALUES ($numbooking, '$identifier', '$dateStart', '$dateEnd','$timeStart', '$timeEnd','$numHour', '$price')");
        
        echo "<script language='javascript'>
        alert('Successfully Added');
        </script>";

          echo "<script language='javascript'>window.location.href='../homepage.html'</script>";

	
        }
}
mysqli_close($dbc);
?>