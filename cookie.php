<?php

setcookie('admin','siddharth',time()+3600);

setcookie('user','Kanzariya',time()+3600);

echo "Cookie ". $_COOKIE['user'];

if(isset($_COOKIE['user'])){
    echo "Cookie is set";
}

// setcookie('admin','',time()-1);
// setcookie('user','',time()-1);