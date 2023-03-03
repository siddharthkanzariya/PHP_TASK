<?php
session_start();

echo "Hello " . $_SESSION['user'] . " You are Logged in";

if(!isset($_SESSION['user']))
{
    header("location:login.php");
}

echo "<br><a href='logout.php'>Logout</a>"
?>