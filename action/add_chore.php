<?php
session_start();

include "../settings/connection.php";
include "../settings/core.php";
echo'I am loved1';
if(isset($_POST["addChore"])){
    userIdExist();
    $choreName = mysqli_real_escape_string($conn, $_POST['choreName']); 
    $check_chore_query = "SELECT * FROM Chores WHERE chorename = '$choreName'";
    
    $check_chore_result = mysqli_query($conn, $check_chore_query);
    
    if (mysqli_num_rows($check_chore_result) > 0) {
        $_SESSION["chore_exists"] = "Chore already exists";
        header("Location: ../admin/choreManagement.php");
        exit();
    }
    
    $insert_chore_query= "INSERT INTO Chores(chorename) VALUES ('$choreName')";
    
    if(mysqli_query($conn, $insert_chore_query)){
         $_SESSION["chore_added"] = "Chore succesfully added";
         header("Location: ../admin/choreManagement.php");
         exit();
    }
    else{
        $_SESSION["chore_added"] = "Chore not added. Please try again.";
        header("Location: ../admin/choreManagement.php");
        exit();
    }
}