<?php
include "../settings/connection.php";

$sql = "SELECT * FROM family_name";
$result = $conn->query($sql);

if (!$result) {
    die("Query failed: " . $conn->error);
}

$familyRoles = [];

while ($row = $result->fetch_assoc()) {
    $familyRoles[] = $row;
}

$conn->close();

