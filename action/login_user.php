<?php
start_session();
require('connection.php');
f (isset($_POST['login'])) {
    // Button is clicked, perform actions here
    echo "Button is clicked!";
} else {
    // Button is not clicked
    echo "Button is not clicked.";
}

?>