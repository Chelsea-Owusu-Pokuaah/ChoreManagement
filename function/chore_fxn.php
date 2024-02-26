<?php
include("../action/get_all_chores.php");

$results = getChores();
$CHORE_ID_INDEX = 0;
$CHORE_NAME_INDEX = 1;
foreach ($results as $result) {
    // var_dump($result[$CHORE_ID_INDEX]);
    echo '
        <tr>
            <td>' . $result[$CHORE_NAME_INDEX] . '</td>
            <td>
                <a class = "delete_icon" href="../action/delete_chore.php?chore_id=' . $result[$CHORE_ID_INDEX] . '">
                    <i class="fa-solid fa-trash-can"></i>
                </a>
                <a class = "edit_icon" href="../view/edit_chore.php?chore_id=' . $result[$CHORE_ID_INDEX] . '">
                    <i class="fa-solid fa-pen-to-square"></i> 
                </a>    
            </td>
            <!-- Add more cells as needed -->
        </tr>
    ';
}

