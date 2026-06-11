<?php
include("db.php");

$id = $_GET['id'];

// Fetch existing user data
$sql = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

// Update user
if(isset($_POST['update'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $role = $_POST['role'];

    $update = "UPDATE users 
               SET fullname='$fullname',
                   email='$email',
                   role='$role'
               WHERE id='$id'";

    if(mysqli_query($conn, $update)){
        header("Location: view.php");
        exit();
    } else {
        echo "Error updating user.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <style>
        body{
            font-family: Arial;
            padding:20px;
        }

        form{
            width:400px;
            margin:auto;
        }

        input, select{
            width:100%;
            padding:10px;
            margin:10px 0;
        }

        button{
            background:#ff69b4;
            color:white;
            border:none;
            padding:10px;
            width:100%;
            cursor:pointer;
        }
    </style>
</head>
<body>

<h2>Edit User</h2>

<form method="POST">

    <input type="text" name="fullname"
           value="<?php echo $user['fullname']; ?>" required>

    <input type="email" name="email"
           value="<?php echo $user['email']; ?>" required>

    <select name="role">
        <option value="customer"
        <?php if($user['role']=='customer') echo 'selected'; ?>>
        Customer
        </option>

        <option value="admin"
        <?php if($user['role']=='admin') echo 'selected'; ?>>
        Admin
        </option>
    </select>

    <button type="submit" name="update">Update User</button>

</form>

</body>
</html>