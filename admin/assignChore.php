<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add chore</title>
    <link rel="stylesheet" href="../css/assignChore.css">
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
                <div class="form">
                    <form action="" method="post" name="assignChore" id="actionChoreAssign">
                        <label for="dropdown1">Assignee</label>
                        <select id="dropdown1" name="dropdown1">
                            <option value="option1">Assign Person</option>
                            <option value="option2">Yaa Yaa</option>
                            <option value="option3">John Doe</option>
                        </select>

                        <label for="dropdown2">Assign Chore</label>
                        <select id="dropdown2" name="dropdown2">
                            <option value="optionA">Assign Chore</option>
                            <option value="optionB">Wash Dishes</option>
                            <option value="optionC">Laundry</option>
                        </select>

                        <label for="dateInput">Due Date</label>
                        <input type="date" id="dateInput" name="dateInput">

                        <button type="submit">Submit</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


</body>

</html>