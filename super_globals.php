<?php
echo '<h1>Super globals in PHP</h1>';
// print_r($_SERVER);
if (isset($_GET['name'])) {
    echo $_GET['name'];
}
if (isset($_GET['age'])) {
    echo $_GET['age'];
}
//filter_var or htmlspecialchars no run js
if (isset($_POST['name'])) {
    echo $_POST['name'];
}
if (isset($_POST['age'])) {
    echo $_POST['age'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="name">Name: </label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="age">Age:&nbsp;&nbsp;&nbsp; </label>
            <input type="text" name="age" id="age">
        </div>
        <div>
            <input type="submit" value="Submit">
        </div>
    </form>
</body>

</html>