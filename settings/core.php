<?php
session_start();
function userIdExist(){
    if(!isset($_SESSION['user_id'])){
        header("Location: ../Login/login_view.php");
        die();
    }
    return $_SESSION["user_id"];
}