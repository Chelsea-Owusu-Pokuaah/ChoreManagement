document.getElementById('addChore').addEventListener("click",function (e) {
    var nameRegex = /[A-za-z ]+$/;

    if (!nameRegex.test(document.forms["addChoreForm"]["choreName"].value)) {
        alert("Invalid Chore name");
        e.preventDefault();
        return false;
    }

});