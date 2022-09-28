<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
</head>

<body>
    <h1>Hi
        <?php
        session_start();
        if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
        } else {
            header('location:sessions.php');
        }
        ?>
    </h1>
    <?php echo '<a href="./sessions.php">Login</a>'; ?>
    <?php echo '<a href="./logout.php">Logout</a>'; ?>
</body>

</html>