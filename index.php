
<?php
require_once 'init.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>file upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <!-- <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="submit">UPLOAD</button>
   </form>  -->
<form enctype="multipart/form-data" action="upload.php" method="POST">
    <input type="file" name="file" />
    Choose a file to upload: <input name="uploadedfile" type="file" /><br />
    <button type="submit" name="submit" >Upload</button>
</form>
</body>
</html>
