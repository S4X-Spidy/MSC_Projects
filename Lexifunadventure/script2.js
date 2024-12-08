function validateForm() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var isValid = true;

    // Reset error messages
    document.getElementById("usernameErr").innerHTML = "";
    document.getElementById("passwordErr").innerHTML = "";

    // Validate username
    if (username.trim() === "") {
        alert("Username is required");
        isValid = false;
    }

    // Validate password
    if (password.trim() === "") {
        alert("Password is required");
        isValid = false;
    }

    return isValid;
}
