function showAlert(message, className) {
    var alertDiv = document.createElement("div");
    alertDiv.classList.add("alert");
    if (className) {
        alertDiv.classList.add(className);
    }
    alertDiv.innerHTML = "<span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span>" + message;
    document.body.appendChild(alertDiv);
    setTimeout(function () {
        alertDiv.style.display = "none";
    }, 5000); // Close the alert after 5 seconds
}

function validatePassword() {
    var password = document.getElementById("password").value;

    var uppercaseRegex = /[A-Z]/;
    var lowercaseRegex = /[a-z]/;
    var numberRegex = /[0-9]/;
    var specialCharacterRegex = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/;

    if (!uppercaseRegex.test(password)) {
        alert("Password must contain at least one uppercase letter.");
        return false;
    }

    if (!lowercaseRegex.test(password)) {
        alert("Password must contain at least one lowercase letter.");
        return false;
    }

    if (!numberRegex.test(password)) {
        alert("Password must contain at least one number.");
        return false;
    }

    if (!specialCharacterRegex.test(password)) {
        alert("Password must contain at least one special character.");
        return false;
    }

    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }

    return true;
}