<?php
include("../settings/connection.php");

if(isset($_POST['signUpbtn'])){
    $fname = $_POST['firstName'];
    $lname=$_POST['lastName'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $telnum=$_POST['phoneNumber'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $family_role=$_POST['familyRole'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
}
?>