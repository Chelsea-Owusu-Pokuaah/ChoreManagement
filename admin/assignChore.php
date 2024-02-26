<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign chore</title>
    <link rel="stylesheet" href="../css/choreAssign.css">
</head>

<body>
    <div class="side-bar">
        <div class="log">
            <p>ChoRest</p>
        </div>
        <ul class="nav">
            <li><a href="../admin/homeAdmin.php">Home</a></li>
            <li><a href="../admin/choreManagement.php">Chore Management</a></li>
            <li class="active"><a href="../admin/assignChore.php">Chore Assignment</a></li>
        </ul>
        <div class="logout">
            <form action="../Login/logout_view.php" name="logout_btn">
                <button class="logout-btn">Log Out</button>
            </form>
        </div>
    </div>
    <div class="middle">
        <header class="header">
            <div class="a">
                <h2>Welcome Back</h2>
                <p class="date">January 8, Friday</p>
            </div>
        </header>

        <div class="choreTable">
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> Chore Name</th>
                            <th> Person Assigned</th>
                            <th> Due Date</th>
                            <th> Chore Status</th>
                            <th> Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td> Washing Dishes </td>
                            <td> John Doe</td>
                            <td> 15-02-22 </td>
                            <td> InProgress </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td> John Doe</td>
                            <td> 15-02-22 </td>
                            <td> InProgress </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td> John Doe</td>
                            <td> 15-02-22 </td>
                            <td> InProgress </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td> John Doe</td>
                            <td> 15-02-22 </td>
                            <td> InProgress </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td> John Doe</td>
                            <td> 15-02-22 </td>
                            <td> InProgress </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td> John Doe</td>
                            <td> 15-02-22 </td>
                            <td> InProgress </td>
                            <td>
                                <button id="choreAction">Action</button>
                            </td>
                        </tr>
                        <tr>
                            <td> Washing Dishes </td>
                            <td> John Doe</td>
                            <td> 15-02-22 </td>
                            <td> InProgress </td>
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
                    <span>Assign a chore</span>
                </div>
                <?php
                session_start();
                if (isset($_SESSION["chore_assign"])) {
                    // echo"smth3";
                    echo '<p class="success-message">' . $_SESSION["chore_assign"] . '</p>';
                    unset($_SESSION["chore_assign"]);
                }
                ?>
                <div class="form">

                    <form action="../action/assign_chore_action.php" method="post" name="assignChore"
                        id="actionChoreAssign">
                        <label for="dropdown1">Assignee</label>
                        <select id="assignPerson" name="assignee" required>
                            <option disabled selected value="0">Choose people</option>

                            <?php
                            include("../action/getAllPeople.php");

                            $result = getPeople();
                            $PEOPLE_FNAME_INDEX = 1;
                            $PEOPLE_LNAME_INDEX = 2;
                            $PEOPLE_ID_INDEX = 0;

                            // var_dump($result);
                            foreach ($result as $person) {
                                echo "<option value='{$person[$PEOPLE_ID_INDEX]}'>{$person[$PEOPLE_FNAME_INDEX]} {$person[$PEOPLE_LNAME_INDEX]}</option>";
                            }
                            ?>
                            <!-- <option value="option1">Assign Person</option>
                            <option value="option2">Yaa Yaa</option>
                            <option value="option3">John Doe</option> -->
                        </select>

                        <label for="dropdown2">Assign Chore</label>
                        <select id="choreToAssign" name="chooseChore" required>
                            <option disabled selected value="0">Choose chore</option>
                            <?php
                            include("../action/get_all_chores.php");
                            $results = getChores();
                            $CHORE_NAME_INDEX = 1;
                            $CHORE_ID_INDEX = 0;
                            foreach ($results as $chores) {
                                echo "<option value='" . $chores[$CHORE_ID_INDEX] . "'>" . $chores[$CHORE_NAME_INDEX] . "</option>";
                            }

                            ?>
                        </select>

                        <label for="dateInput">Due Date</label>
                        <input type="date" id="dateInput" name="dateInput" pattern="/^\d{4}-\d{2}-\d{2}$/" required>
                        <input type="submit" name="assignChoreBtn">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="../js/assign_chore.js"></script>
</body>

</html>