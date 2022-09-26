<?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    echo "Conditional in PHP <br>";
    $age = 22;
    if($age >= 18){
        echo "Your age greater than or equal to 18 years old.";
        echo "<br>";
    }
    else{
        echo "Your age is less than or equal to 18 years old.";
        echo "<br>";
    }

    $hours = date('H');
    if($hours < 12){
        echo "Good morning";
        echo "<br>";
    }
    else if($hours > 12 && $hours < 17){
        echo "Good afternoon";
        echo "<br>";
    }
    else{
        echo "Good evening";
        echo "<br>";
    }

    $comments = ["Comment01", "Comment02"];
    if(!empty($comments)){
        echo "Comments";
        echo "<br>";
    }
    else{
        echo "Comments";
        echo "<br>";
    }

    //Ternary operator
    echo !empty($comments) ? "Comments" : "No Comments";
    echo "<br>";
    $lastcomment = null ?? "Null";
    echo $lastcomment;
    echo "<br>";

    //switch case
    $color = 'blue';
    switch ($color) {
        case 'red':
            echo "You choose RED";
            echo "<br>";
            break;
        case 'blue':
            echo "You choose BLUE";
            echo "<br>";
            break;
        default:
            echo "Color default";
            echo "<br>";
    }

?>