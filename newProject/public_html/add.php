<html>
    <body>
<?php
	if(!empty($_POST['matrixNo']) &&
            !empty($_POST['ps']) && 
            !empty($_POST['name']) &&
            !empty($_POST['phone']) &&
            !empty($_POST['class']) ){
            
        $matrixNo = $_POST['matrixNo'];
	$ps = $_POST['ps'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $class = $_POST['class'];
        
       

	$dbc=mysqli_connect("localhost","root","");
	mysqli_select_db($dbc, "carpark");
		
	
	
	$queryInsert = mysqli_query($dbc, "INSERT INTO user(matrixNo, ps, name, phone, class)
									VALUES ('$matrixNo', '$ps', '$name', '$phone','$class')");
		
	echo "Successfully create a new user! please click the link below back to homepage";
        
        echo '<a href="admindashboard.html">Admin Dashboard  </a>';
       
        }else{
            echo "Please fill in all the information to add user! ";
        }

mysqli_close($dbc);



?>
        
</body>
</html>
