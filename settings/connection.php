<?php
$email = $_POST['email'];
$password = $_POST['password'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$familyRole = $_POST['familyRole'];
$phoneNumber = $_POST['phoneNumber'];

$conn = new mysqli('localhost', 'root', '', 'chores_mgt');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $sql = "INSERT INTO People (fname, lname, gender, dob, tel, email, passwd) VALUES ('$firstName', '$lastName', '$gender', '$dob', '$phoneNumber', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
