

<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
  
// get database connection
include_once '../config/database.php';
  
// instantiate product object
include_once '../objects/product.php';



    
      
$database = new Database();
$db = $database->getConnection();
  
$product = new Product($db);
session_start();


// make sure data is not empty
if(
    !empty($_POST['numBooking']) &&
    !empty($_POST['dateStart']) &&
    !empty($_POST['dateEnd']) &&
    !empty($_POST['timeStart']) &&
    !empty($_POST['timeEnd']) &&
    !empty($_POST['numHour'])   
){
  
    // set product property values
    $product->matrixNo = $_SESSION['identifier'];
    $product->numBooking = $_POST['numBooking'];
    $product->dateStart = $_POST['dateStart'];
    $product->dateEnd = $_POST['dateEnd'];
    $product->timeStart = $_POST['timeStart'];
    $product->timeEnd = $_POST['timeEnd'];
    $product->numHour = $_POST['numHour'];
    $product->price = $product->numHour*1.5;
    
  
  
    // create the product
    if($product->create()){
  
        // set response code - 201 created
        http_response_code(201);
  
        // tell the user
        echo json_encode(array("message" => "Successfully Booking !"));
  
   
    }
  
    // if unable to create the product, tell the user
    else{
  
        // set response code - 503 service unavailable
        http_response_code(503);
  
        // tell the user
        echo json_encode(array("message" => "unseccessful booking! Please try again!"));
    }
}
  
// tell the user data is incomplete
else{
  
    // set response code - 400 bad request
    http_response_code(400);
  
    // tell the user
    echo json_encode(array("message" => "Unable to create product. Data is incomplete."));
}

?>

    
