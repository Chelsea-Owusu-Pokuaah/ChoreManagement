<?php

// include("../action/getAllPeople.php");

// $result = getPeople();
// $PEOPLE_FNAME_INDEX = 1;
// $PEOPLE_LNAME_INDEX = 2;
// $PEOPLE_ID_INDEX = 0;

// // var_dump($result);
// foreach($result as $person) {
//     echo "<option value='{$person[$PEOPLE_ID_INDEX]}'>{$person[$PEOPLE_FNAME_INDEX]} {$person[$PEOPLE_LNAME_INDEX]}</option>";
// };
include("../action/get_all_chores.php");
$results = getChores();
$CHORE_ID_INDEX = 0;
$CHORE_NAME_INDEX = 1;
foreach ($results as $chores) {
    echo "<option value='{$chores[$CHORE_ID_INDEX]}'>{$chores[$CHORE_NAME_INDEX]}</option>";
}
;
