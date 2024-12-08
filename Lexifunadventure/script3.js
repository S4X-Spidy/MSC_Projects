function validateForm() {
    var username = document.getElementById("username").value;
    var isValid = true;

    // Reset error message
    document.getElementById("usernameErr").innerHTML = "";

    // Validate username
    if (username.trim() === "") {
        alert("Username is required");
        isValid = false;
    }

    return isValid;
}
