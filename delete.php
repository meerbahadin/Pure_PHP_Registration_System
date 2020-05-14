<?php
include './includes/head.php';
if (!isAdmin() || !isLoggedIn()) {
    //you can remove this message if you want .
    $_SESSION['msg'] = "You'r not allowed to enter this area!";
    header('location: index.php');
}

if ($_SESSION['user']['id'] == $_GET['id']) {
    $sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($db, $sql)) {
        logOut();
    } else {
        echo "Error deleting record: " . mysqli_error($db);
    }
    mysqli_close($db);
} else {
    $sql = "DELETE FROM users WHERE id='" . $_GET["id"] . "'";
    if (mysqli_query($db, $sql)) {
        header("location: dashboard.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($db);
    }
    mysqli_close($db);
}

function logOut()
{
    session_destroy();
	unset($_SESSION['user']);
	header("location: ./login.php"); 
}

?>