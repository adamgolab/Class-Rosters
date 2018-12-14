<?php

class DbOperation
{
    private $conn;
 
    //Constructor
    function __construct()
    {
        require_once dirname(__FILE__) . '/Constants.php';
        require_once dirname(__FILE__) . '/DbConnect.php';
        // opening db connection
        $db = new DbConnect();
        $this->conn = $db->connect();
    }
 
    //Function to create a new user
    public function createUser($ID, $Day, $Hour, $Tread1, $Tread2, $Tread3, $Tread4, $Tread5, $Tread6, $Tread7, $Tread8, $Tread9, $Tread10, $Tread11, $Tread12, $Rower1, $Rower2, $Rower3, $Rower4, $Rower5, $Rower6, $Rower7, $Rower8, $Rower9, $Rower10, $Rower11, $Rower12, $Floor1, $Floor2, $Floor3, $Floor4, $Floor5, $Floor6, $Floor7, $Floor8, $Floor9, $Floor10, $Floor11, $Floor12)
    {
  
        $stmt = $this->conn->prepare("INSERT INTO Cupertino (ID, Day, Hour, Tread1, Tread2, Tread3, Tread4, Tread5, Tread6, Tread7, Tread8, Tread9, Tread10, Tread11, Tread12, Rower1, Rower2, Rower3, Rower4, Rower5, Rower6, Rower7, Rower8, Rower9, Rower10, Rower11, Rower12, Floor1, Floor2, Floor3, Floor4, Floor5, Floor6, Floor7, Floor8, Floor9, Floor10, Floor11, Floor12) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssssssssssssssssssssssssssssssssss", $ID, $Day, $Hour, $Tread1, $Tread2, $Tread3, $Tread4, $Tread5, $Tread6, $Tread7, $Tread8, $Tread9, $Tread10, $Tread11, $Tread12, $Rower1, $Rower2, $Rower3, $Rower4, $Rower5, $Rower6, $Rower7, $Rower8, $Rower9, $Rower10, $Rower11, $Rower12, $Floor1, $Floor2, $Floor3, $Floor4, $Floor5, $Floor6, $Floor7, $Floor8, $Floor9, $Floor10, $Floor11, $Floor12);
        if ($stmt->execute()) {
            return USER_CREATED;
        } else {
                return USER_NOT_CREATED;
        }
    }
 
}


