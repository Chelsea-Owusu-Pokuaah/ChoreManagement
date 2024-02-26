document.getElementById('actionChoreAssign').addEventListener('submit', function (e) {
    // Assignee validation
    var assigneeDropdown = document.getElementById('assignPerson');
    if (assigneeDropdown.value === "0") {
        alert('Please choose an assignee.');
        e.preventDefault();
        return;
    }

    // Chore validation
    var choreDropdown = document.getElementById('choreToAssign');
    if (choreDropdown.value === "0") {
        alert('Please choose a chore.');
        e.preventDefault();
        return;
    }

    // Due Date validation
    var dateInput = document.getElementById('dateInput');
    var dateRegex = /^\d{4}-\d{2}-\d{2}$/;
    if (!dateRegex.test(dateInput.value)) {
        alert('Please enter a valid due date (DD-MM-YYYY).');
        e.preventDefault();
        return;
    }

    // If all validations pass, the form will be submitted
});
