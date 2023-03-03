<?php
if(isset($_POST['submitbtn']))
{
    $filelocation = $_FILES['txt1']['tmp_name'];
    $filedestination = $_FILES['txt1']['name'];

    $join = move_uploaded_file($filelocation,"uploads/".$filedestination);

    if($join)
    {
        echo "Fileupload Task Done !";
    }
}
?>

<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            File : <input type="file" name="txt1"/>
            <br>
            <input type="submit" name="submitbtn"/>
        </form>
    </body>
</html>