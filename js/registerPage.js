document.getElementById('registrationForm').addEventListener("submit",function (e) {
    

    var password = document.getElementById('password').value;
    var passwordRetype = document.getElementById('retypePassword').value;

    var nameRegex = /^[A-Za-z]+$/;
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var phoneRegex = /^\+?\d{12}$/
    var dobRegex = /^\d{4}-\d{2}-\d{2}$/;
    var passwordRegex = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

    
    if (password != passwordRetype) {
        e.preventDefault();
        alert("Invalid password. Password must be the same as the one typed.");
        return false;
    }
    else if (!nameRegex.test(document.forms["registrationForm"]["firstName"].value)) {
        e.preventDefault();
        alert("Enter a valid name");
        return false;
    }
    else if (!nameRegex.test(document.forms["registrationForm"]["lastName"].value)) {
        e.preventDefault();
        alert("Enter a valid name");
        return false;
    }
    else if (!emailRegex.test(document.forms["registrationForm"]["email"].value)) {
        e.preventDefault();
        alert("Invalid email address");
        return false;
    }
    else if (!dobRegex.test(document.forms["registrationForm"]["dob"].value)) {
        e.preventDefault();
        alert("Invalid date of birth");
        return false;
    }
    else if (!phoneRegex.test(document.forms["registrationForm"]["phoneNumber"].value)) {
        e.preventDefault();
        alert("Invalid phone number.");
        return false;
    }
    else if (!passwordRegex.test(document.forms["registrationForm"]["password"].value) && (password!=passwordRetype)) {
        e.preventDefault();
        alert("Invalid password. Password must contain at least 8 characters, one uppercase letter, one lowercase letter, and one digit.");
        return false;
    }
    


    else{
        document.getElementById('registrationForm').submit();

    }
});
