<?php
include("../action/get_all_chores.php");

$result = getChores();
foreach ($results as $result): ?>
    <tr>
        <td>
            <?= $result['chore_id']; ?>
        </td>
        <td><button id="choreAction">Action</button></td>
        <!-- Add more cells as needed -->
    </tr>
<?php endforeach; ?>