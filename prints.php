<?php
$a = 10;

echo '<h1>Oke Haha</h1>';

echo $a;

echo "pi = ", 3.14, '&nbsp;&nbsp;&nbsp;', 'x = ', 1; //display multiple string

echo "<br>";

print 'Hello World'; // display one string

echo "<br>";

echo "<h2>" . $a + 10 . "</h2>";

var_dump("Hehe"); //(4) "Hehe"

var_dump(false); // bool(false)

echo "<br>";

//print_r(["Nam", "Dung"]) // use array or object

var_export("Hello"); //'Hello'
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
   <h1>
        <?php
            echo "Xin chao"
        ?>
   </h1>
   <h2><?='Hello'?></h2>
</body>
</html>