<?php
include("../action/get_all_chores.php");

$results = getChores();
$CHORE_NAME_INDEX = 1;

foreach ($results as $result) {
    echo '
        <tr>
            <td>' 
                . $result[$CHORE_NAME_INDEX] . '
            </td>
            <td>
                <button id="choreAction">
                    Action
                </button>
            </td>
            <!-- Add more cells as needed -->
        </tr>
    ';
}