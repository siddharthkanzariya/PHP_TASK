<?php
session_start();

if(isset($_SESSION['counter']))
{
    $getoldvalue = $_SESSION['counter'];
    $_SESSION['counter'] = $getoldvalue + 1;
    echo "Counter is " . $_SESSION['counter'];
}else{
    $_SESSION['counter'] = 0;
    echo "Counter is " . $_SESSION['counter'];
}