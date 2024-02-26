<?php
    if(isset($_GET["chore_id"])){
        $choreId = $_GET["chore_id"];
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Chore</title>
    <link rel="stylesheet" href="../css/assignChore.css">
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
            <h1>Edit Chore</h1>
        </header>
        <div class = "choreTable">
        <div class="editPopUp">



                <form name="editChore" id="editChore" method="post" action='<?php echo "../action/edit_chore_action.php?chore_id=" . $choreId?>'>
                    <label>New Chore</label>
                    <input name="newChore" type="text" id="newChore" placeholder="New Chore" required>
                    <button type="submit" name="updateChoreBtn" id="updateChore">Submit</button>
                </form>
            </div> 
        </div>

        <!-- <div class="choreTable">
            <?php
            // session_start();
            // if (isset($_SESSION["chore_deleted"])) {
            //     echo '<p class="success-message">' . $_SESSION["chore_deleted"] . '</p>';
            //     unset($_SESSION["chore_deleted"]);
            // }

            ?>
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
                        // include("../function/chore_fxn.php");
                        ?>
                    </tbody>
                </table>
            </section>
        </div> -->
    </div>
    <div class="left">
        <!-- <div class="addChore">
            <div id="assign" class="assignChore">
                <div class="formLabel">
                    <span>Edit Chore</span> -->
                </div>
                <!-- <div class="form">
                    <form action="../action/add_chore.php" method="post" name="addChore" id="addChoreForm">
                        <?php
                        // session_start();

                        // if (isset($_SESSION["chore_exists"])) {
                        //     echo '<p class="error-message">' . $_SESSION["chore_exits"] . '</p>';
                        //     unset($_SESSION["chore_exits"]);
                        // }

                        // if (isset($_SESSION["chore_added"])) {
                        //     echo '<p class="success-message">' . $_SESSION["chore_added"] . '</p>';
                        //     unset($_SESSION["chore_added"]);
                        // }
                        ?>
                        <input type="text" id="choreName" name="choreName" placeholder="Chore Name" required>
                        <button type="submit" name="addChore" id="addChore">Submit</button>
                    </form>
                </div>
            </div> -->

        </div>
    </div>
</body>

</html>