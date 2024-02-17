<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/homePage.css">
    <style>

    </style>
</head>

<body>
    <div class="dashboard">
        <div class="sidebar">
            <div class="logo">ChoRest</div>
            <ul class="nav">
                <li class="active">Home</li>
                <li><a href="../view/manageChores.php">Manage Chores</a></li>
                <!-- <li><a href="../view/homeAdmin.php">Admin Home</a></li> -->
            </ul>
            <div class="logout">
                <form action="../Login/logout_view.php" name="logout_btn">
                <button class="logout-btn">Log Out</button>
                </form>
            </div>
        </div>
        <div class="content">
            <div class="header">
                <h1>Welcome to the Dashboard</h1>
            </div>
            <div class="widgets">
                <div class="widget">
                    <h2>Inprogress</h2>
                    <div class="statBox">
                        <p class="stat" id="choresInprogress">4</p>
                    </div>
                </div>
                <div class="widget">
                    <h2>Incompleted</h2>
                    <div class="statBox">
                        <p class="stat" id="choresIncomplete">4</p>
                    </div>
                </div>
                <div class="widget">
                    <h2>Completed</h2>
                    <div class="statBox">
                        <p class="stat" id="choresCompleted">4</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <h2 class="stat2">
                    Recently Assigned Chores
                </h2>
                <div class="chore-container">
                    <div class="label">Chore:</div>
                    <div class="chore">Clean the Room</div>
                    <div class="label">Assigned To:</div>
                    <div class="assigned-to">John Doe</div>
                    <div class="label">Date Assigned:</div>
                    <div class="date-assigned">2024-01-15</div>
                    <div class="label">Date Completed:</div>
                    <div class="date-completed">2024-01-16</div>
                    <div class="label">Chore Details:</div>
                    <a href="#" class="chore-details-link">Chore Details</a>
                </div>
                <div class="chore-container">
                    <div class="label">Chore:</div>
                    <div class="chore">Clean the Room</div>
                    <div class="label">Assigned To:</div>
                    <div class="assigned-to">John Doe</div>
                    <div class="label">Date Assigned:</div>
                    <div class="date-assigned">2024-01-15</div>
                    <div class="label">Date Completed:</div>
                    <div class="date-completed">2024-01-16</div>
                    <div class="label">Chore Details:</div>
                    <a href="#" class="chore-details-link">Chore Details</a>
                </div>
                <div class="chore-container">
                    <div class="label">Chore:</div>
                    <div class="chore">Clean the Room</div>
                    <div class="label">Assigned To:</div>
                    <div class="assigned-to">John Doe</div>
                    <div class="label">Date Assigned:</div>
                    <div class="date-assigned">2024-01-15</div>
                    <div class="label">Date Completed:</div>
                    <div class="date-completed">2024-01-16</div>
                    <div class="label">Chore Details:</div>
                    <a href="#" class="chore-details-link">Chore Details</a>
                </div>
        </div>
    </div>
</body>

</html>