<?php
class Product{
  
    // database connection and table name
    private $conn;
    private $table_name = "booking";
  
    // object properties
    public $orderID;
    public $numBooking;
    public $matrixNo;
    public $dateStart;
    public $dateEnd;
    public $timeStart;
    public $timeEnd;
    public $numHour;
    public $price;
  
    // constructor with $db as database connection
    public function __construct($db){
        $this->conn = $db;
    }
    
    
    // read products
function read(){
  
    // select all query
    $query = "SELECT
              *
            FROM
                " . $this->table_name . " ";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // execute query
    $stmt->execute();
  
    return $stmt;
}// end read()

// create product
function create(){
  
    // query to insert record
    $query = "INSERT INTO
                " . $this->table_name . "
            SET
                matrixNo=:matrixNo, 
                numBooking=:numBooking, 
                dateStart=:dateStart, 
                dateEnd=:dateEnd, 
                timeStart=:timeStart,  
                timeEnd=:timeEnd, 
                numHour=:numHour, 
                price=:price";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->matrixNo=htmlspecialchars(strip_tags($this->matrixNo));
    $this->numBooking=htmlspecialchars(strip_tags($this->numBooking));
    $this->dateStart=htmlspecialchars(strip_tags($this->dateStart));
    $this->dateEnd=htmlspecialchars(strip_tags($this->dateEnd));
    $this->timeStart=htmlspecialchars(strip_tags($this->timeStart));
    $this->timeEnd=htmlspecialchars(strip_tags($this->timeEnd));
    $this->numHour=htmlspecialchars(strip_tags($this->numHour));
    $this->price=htmlspecialchars(strip_tags($this->price));
  
    // bind values
    $stmt->bindParam(":matrixNo", $this->matrixNo);
    $stmt->bindParam(":numBooking", $this->numBooking);
    $stmt->bindParam(":dateStart", $this->dateStart);
    $stmt->bindParam(":dateEnd", $this->dateEnd);
    $stmt->bindParam(":timeStart", $this->timeStart);
    $stmt->bindParam(":timeEnd", $this->timeEnd);
    $stmt->bindParam(":numHour", $this->numHour);
    $stmt->bindParam(":price", $this->price);
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
      
}// end create

// update the product
function update(){
  
    // update query
    $query = "UPDATE
                " . $this->table_name . "
            SET
                 matrixNo=:matrixNo, 
                numBooking=:numBooking, 
                dateStart=:dateStart, 
                dateEnd=:dateEnd, 
                timeStart=:timeStart,  
                timeEnd=:timeEnd, 
                numHour=:numHour, 
                price=:price
            WHERE
                orderID = :orderID";
  
    // prepare query statement
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->matrixNo=htmlspecialchars(strip_tags($this->matrixNo));
    $this->numBooking=htmlspecialchars(strip_tags($this->numBooking));
    $this->dateStart=htmlspecialchars(strip_tags($this->dateStart));
    $this->dateEnd=htmlspecialchars(strip_tags($this->dateEnd));
    $this->timeStart=htmlspecialchars(strip_tags($this->timeStart));
    $this->timeEnd=htmlspecialchars(strip_tags($this->timeEnd));
    $this->numHour=htmlspecialchars(strip_tags($this->numHour));
    $this->price=htmlspecialchars(strip_tags($this->price));
  
    // bind values
    $stmt->bindParam(":matrixNo", $this->matrixNo);
    $stmt->bindParam(":numBooking", $this->numBooking);
    $stmt->bindParam(":dateStart", $this->dateStart);
    $stmt->bindParam(":dateEnd", $this->dateEnd);
    $stmt->bindParam(":timeStart", $this->timeStart);
    $stmt->bindParam(":timeEnd", $this->timeEnd);
    $stmt->bindParam(":numHour", $this->numHour);
    $stmt->bindParam(":price", $this->price);
  
    // execute the query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}// end update

// delete the product
function delete(){
  
    // delete query
    $query = "DELETE FROM " . $this->table_name . " WHERE orderID = ?";
  
    // prepare query
    $stmt = $this->conn->prepare($query);
  
    // sanitize
    $this->orderID =htmlspecialchars(strip_tags($this->orderID));
  
    // bind id of record to delete
    $stmt->bindParam(1, $this->orderID);
  
    // execute query
    if($stmt->execute()){
        return true;
    }
  
    return false;
}//end delete



}// end class product


?>