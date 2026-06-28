<?php
session_start();
include('db.php');

// SHOW ERRORS (remove later in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// HANDLE LOGIN
if(isset($_POST['login'])) {

    $email = strtolower(trim($_POST['email']));
    $password = trim($_POST['password']);

    // PREPARED STATEMENT (SECURE)
    $stmt = $conn->prepare("SELECT * FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if($result->num_rows == 1) {

        $user = $result->fetch_assoc();

        // If using plain password (for now)
        if(password_verify($password, $user['password'])){

            $_SESSION['user'] = $user['email'];
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['role'] = $user['role'];
            //REDIRECT BASED ON ROLE
            if ($user['role'] == 'admin'){
                $_SESSION['admin'] =$user['email'];
                header ("Location: admin_dashboard.php");
            }
            else{
                header("Location:index.php");
            }

            

        } else {
            $error = "Incorrect password!";
        }

    } else {
        $error = "Email not found!";
    }
}
?>

<?php include('includes/header.php'); ?>
<?php include('includes/navbar.php'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-5">

            <div class="card shadow">

                <div class="card-header bg-dark text-white">
                    <h3 class="text-center">Login</h3>
                </div>

                <div class="card-body">

                    <!-- ERROR MESSAGE -->
                    <?php if(isset($error)): ?>
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST">

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <button type="submit" name="login" class="btn btn-dark w-100">
                            Login
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>
</div>

<?php include('includes/footer.php'); ?>