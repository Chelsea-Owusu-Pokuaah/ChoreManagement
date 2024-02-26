<?php
session_start();

include_once('../settings/connection.php');    

function getChores(){
    global $conn;
    $get_chore_query = "SELECT * FROM `Chores`";
    $get_chore_result = mysqli_query($conn, $get_chore_query);

    if ($get_chore_result == false) {
        die("Database operation failed: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($get_chore_result)>0) {
        $results = mysqli_fetch_all($get_chore_result);
    }

    return $results;
    

}