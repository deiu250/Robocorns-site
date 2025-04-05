<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit();
}
?>

<h1>Bine ai venit, <?php echo $_SESSION["user"]; ?>!</h1>
<a href="logout.php">Logout</a>
