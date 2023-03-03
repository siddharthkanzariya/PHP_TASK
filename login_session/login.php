<?php
session_start();

if(isset($_POST['submitbtn'])){
    $name = $_POST['name'];

    //FIleupload Code
    $filelocation = $_FILES['image']['tmp_name'];
    $filedestination = $_FILES['image']['name'];

    //Extention Code
    $extention = array("jpg","png");

    if($extention==true){

        $fileupload = move_uploaded_file($filelocation,"uploads/".$filedestination);
        echo "Done";
    }else{
        echo "Error in extention";
    }
    if($fileupload)
    {
        header("location:home.php");
    }

    $_SESSION['user'] = $name;

    header("location:home.php");
}
?>
<html>
    <head>
        <h1>Login With Session</h1>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            Name : <input type="text" name="name"/><br>
            File : <input type="file" name="image"/><br>
            <input type="submit" name="submitbtn"/>
        </form>
    </body>
</html>