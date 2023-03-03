<?php
if(isset($_POST['submitbtn'])){
    $filelocation = $_FILES['txt1']['tmp_name'];
    $filedestination = $_FILES['txt1']['name'];

    if($filedestination<2097152)
    {
        move_uploaded_file($filelocation,"uploads/".$filedestination);

        echo "DONE";
    }else{
        echo "Size is not correct";
    }
}
?>
<html>
    <head>
        <h1>Size</h1>
    </head>
    <body>
        <form method='post' enctype='multipart/form-data'>
            Attach File : <input type="file" name="txt1"/><br>
            <input type="submit" name="submitbtn"/>
        </form>
    </body>
</html>