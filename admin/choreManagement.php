<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chore Management</title>
    <link rel="stylesheet" href="../css/assignChore.css">
    <script src="../js/addChore.js" defer></script>
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
                        include("../function/chore_fx.php");
                        ?>
                        <tr>
                            <td> Washing Dishes </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>
    <div class="left">
        <div class="addChore">
            <div id="assign" class="assignChore">
                <div class="formLabel">
                    <span>Add Chore</span>
                </div>
                <div class="form">
                    <form action="../action/add_chore.php" method="post" name="addChore" id="addChoreForm">
                        <?php
                        session_start();

                        if (isset($_SESSION["chore_exists"])) {
                            echo '<p class="error-message">' . $_SESSION["chore_exits"] . '</p>';
                            unset($_SESSION["chore_exits"]);
                        }

                        if (isset($_SESSION["chore_added"])) {
                            echo '<p class="success-message">' . $_SESSION["chore_added"] . '</p>';
                            unset($_SESSION["chore_added"]);
                        }
                        ?>
                        <input type="text" id="choreName" name="choreName" placeholder="Chore Name" required>
                        <button type="submit" name="addChore" id="addChore">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>

</html>