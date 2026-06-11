<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    Register
                </div>

                <div class="card-body">

                    <form action="register_process.php" method="POST" id="registerForm">

                        <div class="mb-3">
                            <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Full Name" required>
                        </div>

                        <div class="mb-3">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                            
                            <!-- PASSWORD STRENGTH -->
                            <small id="strengthText"></small>
                            <div class="progress mt-1">
                                <div id="strengthBar" class="progress-bar" style="width:0%"></div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password" required>
                        </div>

                        <div id="error" class="text-danger mb-2"></div>

                        <button type="submit" name="register" class="btn btn-fashion w-100">
                            Create Account
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>
</div>

<?php include('includes/footer.php'); ?>

<!-- ================= JAVASCRIPT ================= -->
<script>
document.getElementById("registerForm").addEventListener("submit", function(e) {
    let fullname = document.getElementById("fullname").value.trim();
    let email = document.getElementById("email").value.trim();
    let password = document.getElementById("password").value.trim();
    let confirm = document.getElementById("confirm_password").value.trim();
    let error = document.getElementById("error");

    error.textContent = "";

    if (fullname === "" || email === "" || password === "" || confirm === "") {
        error.textContent = "All fields are required!";
        e.preventDefault();
        return;
    }

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        error.textContent = "Enter a valid email!";
        e.preventDefault();
        return;
    }

    if (password.length < 6) {
        error.textContent = "Password must be at least 6 characters!";
        e.preventDefault();
        return;
    }

    if (password !== confirm) {
        error.textContent = "Passwords do not match!";
        e.preventDefault();
        return;
    }
});


// PASSWORD STRENGTH CHECKER
let passwordInput = document.getElementById("password");
let strengthText = document.getElementById("strengthText");
let strengthBar = document.getElementById("strengthBar");

passwordInput.addEventListener("input", function () {
    let password = passwordInput.value;
    let strength = 0;

    if (password.length >= 6) strength++;
    if (password.length >= 10) strength++;
    if (/\d/.test(password)) strength++;
    if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength++;
    if (/[A-Z]/.test(password)) strength++;

    if (password.length === 0) {
        strengthText.textContent = "";
        strengthBar.style.width = "0%";
    }
    else if (strength <= 2) {
        strengthText.textContent = "Weak Password";
        strengthText.style.color = "red";
        strengthBar.style.width = "33%";
        strengthBar.className = "progress-bar bg-danger";
    }
    else if (strength <= 4) {
        strengthText.textContent = "Medium Password";
        strengthText.style.color = "orange";
        strengthBar.style.width = "66%";
        strengthBar.className = "progress-bar bg-warning";
    }
    else {
        strengthText.textContent = "Strong Password";
        strengthText.style.color = "green";
        strengthBar.style.width = "100%";
        strengthBar.className = "progress-bar bg-success";
    }
});
</script>