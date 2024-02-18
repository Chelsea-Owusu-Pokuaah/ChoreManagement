<?php
session_start();


function getChores(){
    // global $conn;
    include_once('../settings/connection.php');    
    $get_chore_query = "SELECT * FROM `Chores`";
    $get_chore_result = mysqli_query($conn, $get_chore_query);

    if ($get_chore_result == false) {
        die("Database operation failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($get_chore_result)>0) {
        $results = mysqli_fetch_all($get_chore_result);
    }

    // $result = array();
    // while ($row = mysqli_fetch_assoc($get_chore_result)) {
    //     $results[] = $row;
    // }
    
    $conn->close(); 
    return $results;
}