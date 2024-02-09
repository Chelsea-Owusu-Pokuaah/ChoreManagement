

document.getElementById('signInbtn').addEventListener("click",function (e) {
    console.log("hii");
    var email = document.getElementById('emailSignIn').value;
    var password = document.getElementById('passwordSignIn').value;

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;



    if (!emailRegex.test(document.forms["signIn"]["emailSignIn"].value)) {
        alert("Invalid email address");
        e.preventDefault();
    }

    if (!passwordRegex.test(document.forms["signIn"]["passwordSignIn"].value)) {
        alert("Invalid password. Password must contain at least 8 characters, one uppercase letter, one lowercase letter, and one digit.");
        e.preventDefault();
    }

    return true;
});
