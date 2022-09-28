<?php
session_start();
echo "<h1>Sessions in PHP</h1>";
if (isset($_POST['submit'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    if ($email == 'dung@gmail.com' && $password == '123') {
        $_SESSION['email'] = $email;
        header('location:home.php');
    } else {
        echo "Password incorrect";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions </title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
        </div>
        <br>
        <div>
            <label for="password">Password:&nbsp;&nbsp;&nbsp; </label>
            <input type="password" name="password" id="password">
        </div>
        <br>
        <div>
            <input type="submit" value="Submit" name="submit">
        </div>
    </form>
</body>

</html>