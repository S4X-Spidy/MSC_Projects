function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var number = document.getElementById("number").value;
    var password = document.getElementById("password").value;
    var isValid = true;
    console.log("Hello");
    // Reset error messages
    document.getElementById("usernameErr").innerHTML = "";
    document.getElementById("emailErr").innerHTML = "";
    document.getElementById("numberErr").innerHTML = "";
    document.getElementById("passwordErr").innerHTML = "";
    alert("debaakbnndajsbd");
    // Validate username
    if (username.trim() === "") {
        alert("Username is required");
        isValid = false;
    }

    // Validate email
    if (email.trim() === "") {
        alert("Email is required");
        isValid = false;
    } else if (!/\S+@\S+\.\S+/.test(email)) {
        alert("Invalid email format");
        isValid = false;
    }

    // Validate number
    if (number.trim() === "") {
        alert("Mobile number is required");
        isValid = false;
    } else if (!/^\d{10,10}$/.test(number)) {
        alert("Mobile number must be between 10 and 13 digits");
        isValid = false;
    }

    // Validate password
    if (password.trim() === "") {
        alert("Password is required");
        isValid = false;
    } else if (!/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{8,16}$/.test(password)) {
        alert("Prem");
        alert("Password must contain at least one lowercase letter, one uppercase letter, one digit, and be 8-16 characters r67rfyfy long");
        isValid = false;
    }
    

    // return isValid;
}
