<?php
session_start();
include "../settings/connection.php";

function getChores(){
    include_once('../settings/connection.php'); 
    // global $conn;
    $get_chore_query = "SELECT * FROM `Chores`";
    $get_chore_result = mysqli_query($conn, $get_chore_query);
    if($get_chore_result==false){
        die("Database operation failed: " . mysqli_error($conn));
    }

    if(mysqli_num_rows($get_chore_result)>0){
        $results = mysqli_fetch_array($get_chore_result);
    }

    $results = array();

    while ($row = mysqli_fetch_assoc($get_chore_result)) {
        $results[] = $row;
    }
    return $results;
}
$conn->close();