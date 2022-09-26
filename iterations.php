<?php
    echo "Iterations in PHP";
    echo "<br>";
    for($i = 0; $i <= 10; $i++) {
        echo $i;
        echo "<br>";
    }

    $i = 15;

    while ($i < 20) {
        echo $i;
        echo "<br>";
        $i++;
    }

    $ii = 50;
    do{
        echo $ii;
        echo "<br>";
        $ii++;
    }while($ii < 30);

    $fruits = ["apple", "banana", "cherry"];
    echo  count($fruits); // 3
    echo "<br>";
    foreach($fruits as $index => $fruit ){
        echo $index .' '. $fruit;
        echo "<br>";
    }

    $person = [
        'name' => 'John',
        'age' => 25,
    ];
    foreach ($person as $key => $value) {
        echo $key . ' ' . $value;
        echo "<br>";
    }

?>