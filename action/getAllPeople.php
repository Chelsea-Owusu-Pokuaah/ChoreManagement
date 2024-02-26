<?php
session_start();
include_once('../settings/connection.php');    
function getPeople(){
    global $conn;
    $get_people_query = "SELECT pid,fname,lname FROM `People`";
    $get_people_result = mysqli_query($conn, $get_people_query);

    if ($get_people_result == false) {
        die("Database operation failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($get_people_result)>0) {
        $results = mysqli_fetch_all($get_people_result);
    }
    
    return $results;
}
// getPeople();