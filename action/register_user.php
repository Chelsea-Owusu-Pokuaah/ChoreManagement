<?php
 //the session global variable is used to return error messages 
 // process of debigging: check all your variable names, try to print statements to find where the code breaks
 // 
include "../settings/connection.php";


if (isset($_POST["signUpbtn"])) {
    // Collecting inputs from user
    $fname = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lname = mysqli_real_escape_string($conn, $_POST['lastName']);
    $dob = mysqli_real_escape_string($conn, $_POST['dob']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $telnum = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $family_role = mysqli_real_escape_string($conn, $_POST['familyRole']);

    // Ensure that the user email is unique
    $check_email_query = "SELECT * FROM people WHERE email = '$email'";
    $check_email_result = mysqli_query($conn, $check_email_query);

    // echo "something";


    if (mysqli_num_rows($check_email_result) > 0) {
        $_SESSION["email_exists"] = "Account with this email already exists";
        header("Location: ../Login/login_view.php");
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if( $family_role == 1 || $family_role == 2 ){
        $default_role = 2;
    } else{
        $default_role = 3;
    }
    $insert_person_query = "INSERT INTO People(rid, fid, fname, lname, gender, dob, tel, email, passwd) VALUES ('$default_role', '$family_role', '$fname', '$lname', '$gender', '$dob', '$telnum', '$email', '$hashed_password')";
    
    if (mysqli_query($conn, $insert_person_query)) {
        // Successful registration
        // $_SESSION["account_created"] = true;
        header("Location: ../Login/login_view.php");
        echo "success";
        exit();
    } else {
        // Registration failed
        $_SESSION["account_created"] = "Error creating account. Please try again.";
        header("Location: ../Login/register_view.php");
        echo "failed";
        $conn->close();
        exit();
    }
} else {
    $_SESSION["account_created"] = "Error creating account. Please try again.";
    header("Location: ../Login/register_view.php");
    $conn->close();
    exit();
}

