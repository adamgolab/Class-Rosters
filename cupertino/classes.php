<?php

//importing required script
require_once 'DbOperation.php';
 
$response = array();
 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //getting values
        $ID = $_POST['ID'];
        $Day = $_POST['Day'];
        $Hour = $_POST['Hour'];
        $Tread1 = $_POST['Tread1'];
        $Tread2 = $_POST['Tread2'];
        $Tread3 = $_POST['Tread3'];
        $Tread4 = $_POST['Tread4'];
        $Tread5 = $_POST['Tread5'];
        $Tread6 = $_POST['Tread6'];
        $Tread7 = $_POST['Tread7'];
        $Tread8 = $_POST['Tread8'];
        $Tread9 = $_POST['Tread9'];
        $Tread10 = $_POST['Tread10'];
        $Tread11 = $_POST['Tread11'];
        $Tread12 = $_POST['Tread12'];
        $Rower1 = $_POST['Rower1'];
        $Rower2 = $_POST['Rower2'];
        $Rower3 = $_POST['Rower3'];
        $Rower4 = $_POST['Rower4'];
        $Rower5 = $_POST['Rower5'];
        $Rower6 = $_POST['Rower6'];
        $Rower7 = $_POST['Rower7'];
        $Rower8 = $_POST['Rower8'];
        $Rower9 = $_POST['Rower9'];
        $Rower10 = $_POST['Rower10'];
        $Rower11 = $_POST['Rower11'];
        $Rower12 = $_POST['Rower12'];
        $Floor1 = $_POST['Floor1'];
        $Floor2 = $_POST['Floor2'];
        $Floor3 = $_POST['Floor3'];
        $Floor4 = $_POST['Floor4'];
        $Floor5 = $_POST['Floor5'];
        $Floor6 = $_POST['Floor6'];
        $Floor7 = $_POST['Floor7'];
        $Floor8 = $_POST['Floor8'];
        $Floor9 = $_POST['Floor9'];
        $Floor10 = $_POST['Floor10'];
        $Floor11 = $_POST['Floor11'];
        $Floor12 = $_POST['Floor12'];
 
        //creating db operation object
        $db = new DbOperation();
 
        //adding user to database
        $result = $db->createUser($ID, $Day, $Hour, $Tread1, $Tread2, $Tread3, $Tread4, $Tread5, $Tread6, $Tread7, $Tread8, $Tread9, $Tread10, $Tread11, $Tread12, $Rower1, $Rower2, $Rower3, $Rower4, $Rower5, $Rower6, $Rower7, $Rower8, $Rower9, $Rower10, $Rower11, $Rower12, $Floor1, $Floor2, $Floor3, $Floor4, $Floor5, $Floor6, $Floor7, $Floor8, $Floor9, $Floor10, $Floor11, $Floor12);
 
        //making the response accordingly
        if ($result == USER_CREATED) {
            $response['error'] = false;
            $response['message'] = 'Class created successfully';
        } elseif ($result == USER_NOT_CREATED) {
            $response['error'] = true;
            $response['message'] = 'Some error occurred';
        }
} else {
    $response['error'] = true;
    $response['message'] = 'Invalid request';
}
 
echo json_encode($response);