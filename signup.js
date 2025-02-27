document.getElementById('signupForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Clear any previous error messages
    document.getElementById('errorMessage').classList.add('hidden');

    // Get form field values
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const email = document.getElementById('email').value;
    const confirmEmail = document.getElementById('confirmEmail').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const role = document.getElementById('role').value;

    // Validation checks
    if (email !== confirmEmail) {
        document.getElementById('errorMessage').textContent = 'Emails do not match.';
        document.getElementById('errorMessage').classList.remove('hidden');
        return;
    }

    if (password !== confirmPassword) {
        document.getElementById('errorMessage').textContent = 'Passwords do not match.';
        document.getElementById('errorMessage').classList.remove('hidden');
        return;
    }

    // Send form data to PHP
    fetch('signup.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: new URLSearchParams({
            firstName: firstName,
            lastName: lastName,
            email: email,
            password: password,
            role: role
        })
    })
    .then(response => response.text())
    .then(data => {
        if (data.includes('User registered successfully')) {
            alert('Registration successful!');
            // Redirect to login page or another page
            window.location.href = '/login';  // Change the path as needed
        } else {
            document.getElementById('errorMessage').textContent = data;
            document.getElementById('errorMessage').classList.remove('hidden');
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
});

