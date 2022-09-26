<?php
    echo "Variable in PHP";
    echo "<br>";
    $name = "Dung";
    echo $name;
    $isLoading = false;
    echo $isLoading; // display none
    echo "<br>";
    $age = 18;
    var_dump($age); //int(18)
    echo "<br>";
    echo 0;
    echo "<br>";
    echo true; // 1
    echo "<br>";
    var_dump($isLoading); //bool(false)
    echo "<br>";
    $price = 22.50; 
    var_dump($price); //float(22.5)
    //?string concat
    echo "<h1>".$name. ' '.$age. "</h1>" ."<br>"; // Dung 18
    echo "$name is $age"; // Dung is 18
    echo "<br>";
    echo "${name} is ${age}"; // Dung is 18
    echo "<br>";
    //! expression
    echo 5 + 5; // 10
    echo "<br>";
    echo '1' + '2'; // 3
    echo "<br>";
    echo '1' - '2'; // -1
    echo "<br>";
    //constants
    define("PI", 3.14);
    echo PI;
?>