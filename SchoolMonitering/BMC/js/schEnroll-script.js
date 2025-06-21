// Toggle password visibility
function togglePassword() {
    let passwordField = document.getElementById("password");
    let confirmPasswordField = document.getElementById("confirm_password");
    let checkbox = document.getElementById("showPassword");

    if (checkbox.checked) {
        passwordField.type = "text";
        confirmPasswordField.type = "text";
    } else {
        passwordField.type = "password";
        confirmPasswordField.type = "password";
    }
}

// Form Validation
document.getElementById('enrollmentForm').addEventListener('submit', function(event) {
    let pincode = document.getElementById('pincode').value;
    let contact1 = document.getElementById('contact1').value;
    let contact2 = document.getElementById('contact2').value;
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirm_password').value;
    
    if (pincode.length !== 6 || isNaN(pincode)) {
        alert("Enter a valid 6-digit Pincode.");
        event.preventDefault();
    }

    if (!contact1.match(/^[6789]\d{9}$/)) {
        alert("Enter a valid 10-digit Primary Contact Number.");
        event.preventDefault();
    }

    if (contact2 !== "" && !contact2.match(/^[6789]\d{9}$/)) {
        alert("Enter a valid 10-digit Secondary Contact Number.");
        event.preventDefault();
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        event.preventDefault();
    }
});
