<?php
session_start();
include("../settings/connection.php");

if (isset($_GET['chore_id'])) {

    $choreId = $_GET['chore_id'];
    // $choreName = mysqli_real_escape_string($conn, $_POST['changeName']);
    // $chore_id_query = "SELECT cid FROM Chore WHERE chorename = $choreName";
    // $chore_id_query_result = mysqli_query($conn, $chore_id_query);

    // if (mysqli_num_rows($check_if_name_exists_query_result) == 0) {
    //     $_SESSION['chore_deleted'] = 'Chore does not exist';
    //     // echo 'worked1';
    //     header('Location: ../admin/choreManagement.php');
    // }
    // // $choreId = mysqli_fetch_all($chore_id_query_result);
    $delete_query = "DELETE FROM `Chores` WHERE `Chores`.`cid` = $choreId";
    $delete_result = mysqli_query($conn, $delete_query);
    if ($delete_result == true) {
        $_SESSION["chore_deleted"] = "Chore deleted successfully";
        echo 'worked';
        header('Location: ../admin/choreManagement.php');
        exit();
    }
}
$_SESSION["chore_deleted"] = "Chore deleted failed";
// echo $_POST[''];
header('Location: ../admin/choreManagement.php');
$conn->close();
