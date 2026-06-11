<?php
session_start();
session_destroy();

header("Location: login.php");
exit();
?>
<?php
session_start();
session_destroy();

header("Location: admin_login.php");
exit();
?>