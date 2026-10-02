<html>
<body>
<form method="post" enctype="multipart/form-data">
Select image to upload:
<input type="file" name="photo"><br>
<input type="submit" value="upload" name="submit">
</form>
</body>
</html>
<?php
ini_set("display_errors", 1);
if (isset($_POST['submit']) && $_POST['submit'] == 'upload') {
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] === UPLOAD_ERR_OK) {
        $targetfolder = "./" . basename($_FILES['photo']['name']);
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $targetfolder)) {
             echo "The file " . htmlspecialchars(basename($_FILES['photo']['name']));
        } else {
             echo "Problem uploading file";
        }
    } else {
        echo "No file selected or an upload error occurred";
    }
}
?>
