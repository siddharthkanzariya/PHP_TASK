<?php
// session_start();

// $_SESSION['admin'] = "Michal";

// echo "Session Value is " . $_SESSION['admin'];

// echo "<pre>";
// print_r($_SESSION);


//All in one 

session_start();

if(isset($_SESSION['admin']))
{
    session_destroy();

    unset($_SESSION['admin']);

    echo "Session is deleted";
}else{
    $_SESSION['admin'] = "Michal";

    echo "Session is set and value is " . $_SESSION['admin'];
}
?>