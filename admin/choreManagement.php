<?php
include("../settings/core.php");
userIdExist();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management</title>
    <link rel="stylesheet" href="../css/choreAssign.css">
    <script src="../js/addChore.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        crossorigin="anonymous">
</head>

<body>
    <div class="side-bar">
        <div class="log">
            <p>ChoRest</p>
        </div>
        <ul class="nav">
            <li><a href="../admin/homeAdmin.php">Home</a></li>
            <li class="active"><a href="../admin/choreManagement.php">Chore Management</a></li>
            <li><a href="../admin/assignChore.php">Chore Assignment</a></li>
        </ul>
        <div class="logout">
            <form action="../Login/logout_view.php" name="logout_btn">
                <button class="logout-btn">Log Out</button>
            </form>
        </div>
    </div>
    <div class="middle">
        <header class="header">
            <h1>Manage All chores</h1>
        </header>
        <div class="choreTable">
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> Chore Name</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include_once("../function/chore_fxn.php");
                        ?>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <div class="left">
        <header class="header"></header>
        <div class="addChore">
            <div id="assign" class="assignChore">
                <div class="formLabel">
                    <span>Add Chore</span>
                </div>
                <div class="form">
                    <form action="../action/add_chore.php" method="post" name="addChore" id="addChoreForm">
                        <?php
                        session_start();

                        if (isset($_SESSION["chore_added"])) {
                            echo '<p class="success-message">' . $_SESSION["chore_added"] . '</p>';
                            unset($_SESSION["chore_added"]);
                        }
                        if (isset($_SESSION["chore_deleted"])) {
                            echo '<p class="success-message">' . $_SESSION["chore_deleted"] . '</p>';
                            unset($_SESSION["chore_deleted"]);
                        }
                        if (isset($_SESSION["chore_updated"])) {
                            echo '<p class="success-message">' . $_SESSION["chore_updated"] . '</p>';
                            unset($_SESSION["chore_updated"]);
                        }
                        ?>
                        <input type="text" id="choreName" name="choreName" placeholder="Chore Name" required>
                        <button type="submit" name="addChore" id="addChore">Submit</button>
                    </form>
                </div>
            </div>
            <!-- <div class="editPopUp">
                <form name="editChore" id="editChore">
                    <label>New Chore</label>
                    <input type="text" id="newChore" placeholder="New Chore" required>
                    <button type="submit" name="addChore" id="addChore">Submit</button>
                </form>
            </div> -->
        </div>
    </div>
</body>

</html>