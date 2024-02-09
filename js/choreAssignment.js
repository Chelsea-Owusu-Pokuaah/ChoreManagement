var assigChore = document.getElementById("choreAssignment");

assigChore.addEventListener("click", function(){
    var choreForm = document.getElementById("assign");
        choreForm.style.display = (choreForm.style.display === 'none' || choreForm.style.display === '') ? 'block' : 'none';
    });

