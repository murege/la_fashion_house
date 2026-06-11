<?php
include("db.php");

// Fetch users
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Users</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            padding:20px;
        }

        table{
            width:100%;
            border-collapse: collapse;
        }

        th, td{
            border:1px solid #ddd;
            padding:10px;
            text-align:left;
        }

        th{
            background-color:#ff69b4;
            color:white;
        }

        tr:nth-child(even){
            background-color:#f9f9f9;
        }
    </style>
</head>
<body>

<h2>Registered Users</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Created At</th>
        <th>Actions</th>
    </tr>

    <?php
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['fullname']."</td>";
echo "<td>".$row['email']."</td>";
echo "<td>".$row['role']."</td>";
echo "<td>".$row['created_at']."</td>";
echo "<td><a href='update.php?id=".$row['id']."'>Edit</a></td>";
echo "</tr>";
echo "<td>
<a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete this user?\")'>Delete</a>
</td>";
        }
    } else {
        echo "<tr><td colspan='5'>No users found</td></tr>";
    }
    ?>
</table>

</body>
</html>