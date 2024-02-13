<?php
session_start();
function userIdExist(){
    if(!isset($_SESSION['user_id'])){
        header("Location: loginPage.php");
        die();
    }
}
die();
?>
