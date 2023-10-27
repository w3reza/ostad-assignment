<?php
session_start();

if (!isset($_SESSION["emailAddress"])) {
    header("Location: login.php");
}

if ($_SESSION["role"] == "user") {
    header("Location: home_user.php");
}
elseif ($_SESSION["role"] == "manager") {
    header("Location: home_manager.php");
}
elseif ($_SESSION["role"] == "admin") {
    header("Location: roleManagement.php");
}

?>
