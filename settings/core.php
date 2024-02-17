<?php
session_start();
function userIdExist(){
    if(!isset($_SESSION['user_id'])){
        header("Location: ../view/loginPage.php");
        die();
    }
    return $_SESSION["user_id"];
}
