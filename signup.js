document.getElementById("signupForm").addEventListener("submit", function (e) {
    e.preventDefault(); 

    let fullName = document.getElementById("fullName").value.trim();
    let email = document.getElementById("email").value.trim();
    let confirmEmail = document.getElementById("confirmEmail").value.trim();
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;
    let gender = document.getElementById("gender").value;
    let dob = document.getElementById("dob").value;
    let errorMessage = document.getElementById("errorMessage");

    // Validation
    if (fullName === "" || email === "" || confirmEmail === "" || password === "" || confirmPassword === "" || gender === "" || dob === "") {
        errorMessage.innerText = "All fields are required!";
        errorMessage.classList.remove("hidden");
        return;
    }

    if (email !== confirmEmail) {
        errorMessage.innerText = "Emails do not match!";
        errorMessage.classList.remove("hidden");
        return;
    }

    if (password !== confirmPassword) {
        errorMessage.innerText = "Passwords do not match!";
        errorMessage.classList.remove("hidden");
        return;
    }

    if (password.length < 6) {
        errorMessage.innerText = "Password must be at least 6 characters long!";
        errorMessage.classList.remove("hidden");
        return;
    }

    errorMessage.classList.add("hidden");

    // Form Submission
    alert("Sign-up successful!");
    document.getElementById("signupForm").reset();
});
