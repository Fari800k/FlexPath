document.getElementById("loginForm").addEventListener("submit", async function (e) {
    e.preventDefault();

    const email = document.getElementById("loginEmail").value.trim();
    const password = document.getElementById("loginPassword").value.trim();
    const errorMessage = document.getElementById("loginErrorMessage");

    errorMessage.classList.add("hidden");
    errorMessage.textContent = "";

    if (!email || !password) {
        errorMessage.textContent = "Please fill in all fields.";
        errorMessage.classList.remove("hidden");
        return;
    }

    try {
        const response = await fetch("login.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: new URLSearchParams({ email, password }),
        });

        const data = await response.json();

        if (data.success) {
            alert(data.message);
            if (data.role === "admin") {
                window.location.href = "admin-dashboard.php";
            } else if (data.role === "trainer") {
                window.location.href = "trainer-dashboard.php";
            } else {
                window.location.href = "client-dashboard.php";
            }
        } else {
            errorMessage.textContent = data.message;
            errorMessage.classList.remove("hidden");
        }
    } catch (error) {
        console.error("Login Error:", error);
        errorMessage.textContent = "An error occurred. Please try again.";
        errorMessage.classList.remove("hidden");
    }
});
