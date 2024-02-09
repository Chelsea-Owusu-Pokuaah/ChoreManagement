<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="/css/choreAssignment.css">
    <style>

    </style>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="log"><p>ChoRest</p></div>
            <ul class="nav">
                <li><a href="/admin/homeAdmin.html">Home</a></li>
                <li ><a href="/admin/choreManagement.html">Chore Management</a></li>
                <li class="active"><a  href="choreAssignment.html">Chore Assignment</a></li>
            </ul>
            <div class="logout">
                <button class="logout-btn">Log Out</button>
            </div>
        </div>
        <div class="content">
            <button id="choreAssignment">Chore Assignment</button>
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
            <div id="assign" class="assignChore">
                <div class="formLabel">
                    <span>Assign a chore</span>
                </div>
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
    <script src="/js/choreAssignment.js"></script>
</body>

</html>