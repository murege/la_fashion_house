<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}

include('db.php');
include('includes/header.php');
include('includes/navbar.php');

$email = $_SESSION['user'];

$query = mysqli_query($conn,
"SELECT * FROM users WHERE email='$email'");

$user = mysqli_fetch_assoc($query);
?>

<div class="container mt-5">

    <div class="card shadow p-4">

        <h2 class="mb-4">My Profile</h2>

        <form action="update_profile.php" method="POST">

            <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text"
                       name="fullname"
                       class="form-control"
                       value="<?php echo $user['fullname']; ?>"
                       required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email"
                       name="email"
                       class="form-control"
                       value="<?php echo $user['email']; ?>"
                       required>
            </div>

            <button type="submit"
                    class="btn btn-dark">
                Update Profile
            </button>

        </form>

    </div>

</div>

<?php include('includes/footer.php'); ?>