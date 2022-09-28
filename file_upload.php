<?php
// print_r($_FILES);
if (isset($_POST['submit'])) {
    $extensions = ['png', 'jpg', 'jpeg', 'gif'];
    $file_name = $_FILES['upload']['name'];
    if (!empty($file_name)) {
        $file_size = $_FILES['upload']['size'];
        $file_tmp_name = $_FILES['upload']['tmp_name'];
        $file_full_path = $_FILES['upload']['full_path'];
        $generated_file_name = time() . '_' . $file_name;
        $destination_path = "./upload/${generated_file_name}";
        $file_extension = explode('.', $file_name);
        $file_extension = strtolower(end($file_extension));
        if (in_array($file_extension, $extensions)) {
            if ($file_size <= 1000000) {
                move_uploaded_file($file_tmp_name, $destination_path);
                echo "File uploaded successfully!";
            } else {
                echo "Upload failed!";
            }
        } else {
            echo "File uploaded invalid";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file</title>
</head>

<body>
    <h1>File upload in PHP</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="upload" id="upload">
        <input type="submit" value="Submit" name="submit" id="submit">
    </form>
</body>

</html>