document.getElementById('registrationForm').addEventListener("click",function (e) {
    var password = document.getElementById('password').value;
    var passwordRetype = document.getElementById('passwordRetype').value;

    var nameRegex = /^[A-Za-z]+$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var phoneRegex = /^\d{10}$/;
    var dobRegex = /^(0[1-9]|[12][0-9]|3[01])-(0[1-9]|1[0-2])-\d{4}$/;
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;


    if (!nameRegex.test(document.forms["registrationForm"]["firstName"].value)) {
        alert("Enter a valid name");
        e.preventDefault();
    }
    if (!nameRegex.test(document.forms["registrationForm"]["lastName"].value)) {
        alert("Enter a valid name");
        e.preventDefault();
    }
    if (!emailRegex.test(document.forms["registrationForm"]["email"].value)) {
        alert("Invalid email address");
        e.preventDefault();
    }
    if (!dobRegex.test(document.forms["registrationForm"]["dob"].value)) {
        alert("Invalid date of birth");
        e.preventDefault();
    }
    if (!phoneRegex.test(document.forms["registrationForm"]["phoneNumber"].value)) {
        alert("Invalid phone number.");
        e.preventDefault();
    }
    if (!passwordRegex.test(document.forms["registrationForm"]["password"].value)) {
        alert("Invalid password. Password must contain at least 8 characters, one uppercase letter, one lowercase letter, and one digit.");
        e.preventDefault();
    }
    if (!passwordRegex.test(document.forms["registrationForm"]["passwordRetype"].value) && passwordRetype == password) {
        alert("Invalid password. Password must be the same as the one typed.");
        e.preventDefault();
    }


    return true;
});
