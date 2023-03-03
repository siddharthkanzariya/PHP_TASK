<?php

if(isset($_POST['submitbtn'])){
    $filelocation = $_FILES['txt1']['tmp_name'];
    $filedestination = $_FILES['txt1']['name'];

    $extention = array("jpg","png");

    if($extention==true)
    {
        move_uploaded_file($filelocation,"uploads/".$filedestination);

        echo "Fileupload Done";
    }else{
        echo "Please Chech Extention";
    }
}

?>
<html>
    <head>
        <h1>Fileupload With Extention</h1>
    </head>
    <body>
        <form method='post' enctype='multipart/form-data'>
            Attach File : <input type="file" name="txt1"/><br>
            <input type="submit" name="submitbtn"/>
        </form>
    </body>
</html>