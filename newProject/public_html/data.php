 
<html>
    <head>
        <title>Data Analytic</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="font.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
        
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
           
            <div id="chartContainer" style="height: 100%; width: 100%;"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        
         <?php
         // authentication
           $realm = 'Restricted area';

           //user => password
           $users = array('admin' => 'admin');


           if (empty($_SERVER['PHP_AUTH_DIGEST'])) {
               header('HTTP/1.1 401 Unauthorized');
               header('WWW-Authenticate: Digest realm="'.$realm.
                      '",qop="auth",nonce="'.uniqid().'",opaque="'.md5($realm).'"');

               die('Text to send if user hits Cancel button');
           }
            
            

           // analyze the PHP_AUTH_DIGEST variable
           if (!($data = http_digest_parse($_SERVER['PHP_AUTH_DIGEST'])) ||
               !isset($users[$data['username']]))
               die('Wrong Credentials!');


           // generate the valid response
           $A1 = md5($data['username'] . ':' . $realm . ':' . $users[$data['username']]);
           $A2 = md5($_SERVER['REQUEST_METHOD'].':'.$data['uri']);
           $valid_response = md5($A1.':'.$data['nonce'].':'.$data['nc'].':'.$data['cnonce'].':'.$data['qop'].':'.$A2);

           if ($data['response'] != $valid_response)
               die('Wrong Credentials!');

           // ok, valid username & password
           echo 'You are logged in as: ' . $data['username'];
           
           // function to parse the http auth header
            function http_digest_parse($txt)
            {
                // protect against missing data
                $needed_parts = array('nonce'=>1, 'nc'=>1, 'cnonce'=>1, 'qop'=>1, 'username'=>1, 'uri'=>1, 'response'=>1);
                $data = array();
                $keys = implode('|', array_keys($needed_parts));

                preg_match_all('@(' . $keys . ')=(?:([\'"])([^\2]+?)\2|([^\s,]+))@', $txt, $matches, PREG_SET_ORDER);

                foreach ($matches as $m) {
                    $data[$m[1]] = $m[3] ? $m[3] : $m[4];
                    unset($needed_parts[$m[1]]);
                }

                return $needed_parts ? false : $data;
            }
                // End authentication 
                        //start database
			$dbc = mysqli_connect("localhost","root","");
				mysqli_select_db($dbc, "carpark");
                                            for($i=1; $i<=12; $i++){
                                               
                                                $query="SELECT SUM(numHour) AS totalAmount FROM booking WHERE MONTH(dateStart) ='".$i."'";
                                                $r = mysqli_query($dbc, $query);
                                                $row=mysqli_fetch_array($r);
                                                if($i==1){
                                                        if($row['totalAmount'] == "")
                                                        {
                                                            $jan = 0 ;
                                                        }
                                                        else
                                                        {
                                                            $jan = $row['totalAmount'];
                                                        
                                                        }
                                                    }
                                                     
                                                    elseif($i==2){
                                                            if($row['totalAmount'] == "")
                                                        {
                                                            $feb = 0 ;
                                                        }
                                                        else{
                                                        $feb = $row['totalAmount'];
                                                        }
                                                        
                                                    }
                                                    
                                                    elseif($i==3){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $mar = 0 ;
                                                        }
                                                        else{
                                                        $mar = $row['totalAmount'];
                                                        }
                                                        //echo $mar;
                                                    }
                                                    
                                                    elseif($i==4){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $apr = 0 ;
                                                        }
                                                        else{
                                                        $apr = $row['totalAmount'];
                                                        }
                                                        //echo $apr;
                                                    }
                                                    
                                                    elseif($i==5){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $may = 0 ;
                                                        }
                                                        else{
                                                        $may = $row['totalAmount'];
                                                        }
                                                        //echo $may;
                                                    }
                                                    
                                                    elseif($i==6){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $jun = 0 ;
                                                        }
                                                        else{
                                                        $jun = $row['totalAmount'];
                                                        }
                                                        //echo $jun;
                                                    }
                                                    
                                                    
                                                    elseif($i==7){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $jul = 0 ;
                                                        }
                                                        else{
                                                        $jul = $row['totalAmount'];
                                                        }
                                                        //echo $jul;
                                                    }
                                                    
                                                    elseif($i==8){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $aug = 0 ;
                                                        }
                                                        else{
                                                        $aug = $row['totalAmount'];
                                                        }
                                                        //echo $aug;
                                                    }
                                                    
                                                    elseif($i==9){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $sep = 0 ;
                                                        }
                                                        else{
                                                        $sep = $row['totalAmount'];
                                                        }
                                                        //echo $sep;
                                                    }
                                                    
                                                    elseif($i==10){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $oct = 0 ;
                                                        }
                                                        else{
                                                        $oct = $row['totalAmount'];
                                                        }
                                                        //echo $oct;
                                                    }
                                                    
                                                    elseif($i==11){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $nov = 0 ;
                                                        }
                                                        else{
                                                        $nov = $row['totalAmount'];
                                                        }
                                                        //echo $nov;
                                                    }
                                                    
                                                    elseif($i==12){
                                                         if($row['totalAmount'] == "")
                                                        {
                                                            $dec = 0 ;
                                                        }
                                                        else{
                                                        $dec = $row['totalAmount'];
                                                        }
                                                        //echo $dec;
                                                    }else{
                                                    print'<p style="color:red;">Could not retrieve the data because :<br/>' .mysqli_error($dbc).
                                                    '.</p><p>the query being run was : '.$query.'</p>';
                                                }                                                   

                                            }
					
					mysqli_close($dbc);
                                        
                                
            ?>
        </div>
        <script>
        window.onload = function () {

        var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "dark2", // "light1", "light2", "dark1", "dark2"
                title:{
                            text: "Total booked hours?monthly?"
                },
                axisY: {
                  includeZero: true
                },
                data: [{
                        type: "column",
                        indexLabelFontColor: "#5A5757",
      	indexLabelFontSize: 16,
		indexLabelPlacement: "outside",
                        dataPoints: [
                                { label: 'Jan', y: <?php echo $jan ?> },	
                                { label: 'Feb', y: <?php echo $feb ?>  },	
                                { label: 'Mar', y: <?php echo $mar ?>  },
                                { label: 'Apr', y: <?php echo $apr ?>  },	
                                { label: 'May', y: <?php echo $may ?>  },
                                { label: 'Jun', y: <?php echo $jun ?>  },
                                { label: 'Jul', y: <?php echo $jul ?>  },
                                { label: 'Aug', y: <?php echo $aug ?>  },
                                { label: 'Sep', y: <?php echo $sep ?>  },
                                { label: 'Oct', y: <?php echo $oct ?>  },
                                { label: 'Nov', y: <?php echo $nov ?>  },
                                { label: 'Dec', y: <?php echo $dec ?>  }

                        ]
                }]
        });
        chart.render();

        }
        </script>
        
    </body>
</html>
