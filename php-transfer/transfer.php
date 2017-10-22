<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload: <br>
    <input type="file" multiple="multiple" name="fileToUpload[]"><br>
    Override: <input type="checkbox" name="checkBox">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
