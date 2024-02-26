<?php
session_start();
include "../settings/connection.php";
include "../settings/core.php";

// echo"hi";
if (isset($_POST["assignChoreBtn"])) {

    userIdExist();
    $assigneeId = $_POST['assignee'];
    $choreId = $_POST['chooseChore'];
    // echo $assigneeId;
    // echo $choreId;
    $due_date = mysqli_real_escape_string($conn, $_POST['dateInput']);
    // echo $due_date;
    // check if assignee has been assigned the same chore
    

    $check_assignee_chore_sql = "SELECT * FROM `Assignment` WHERE who_assigned = $assigneeId AND cid = $choreId AND date_due = '$due_date'";

    $check_assignee_chore_result = mysqli_query($conn, $check_assignee_chore_sql);
    // $check_assignee_result = mysqli_fetch_array($check_assignee_result);
    // echo $check_assignee_result;     

    // echo $check_assignee_chore_result;}

    if ($check_assignee_chore_result > 0) {
        $_SESSION["chore_assign"] = "Chore has already been assigned to this person";
        header("Location: ../admin/assignChore.php");
        // echo 'failes';
        exit();
    }
    $default_status = 1;
    $date = date('Y-m-d');
    $insert_assignment_query = "INSERT INTO `Assignment`(`cid`, `sid`, `date_assign`,`date_due`, `who_assigned`) VALUES ($choreId,$default_status,'$date','$due_date',$assigneeId)";
    echo $insert_assignment_query;
    if (mysqli_query($conn, $insert_assignment_query)) {
        $_SESSION["chore_assign"] = "Chore succesfully assigned";
         header("Location: ../admin/assignChore.php");
        echo 'success';
        exit();
    } else {
        $_SESSION["chore_assign"] = "Chore not successfully assigned. Please try again.";
        header("Location: ../admin/assignChore.php");
        echo 'failed';

        exit();
    }
}
