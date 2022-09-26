<?php
    echo "<h1>Array in PHP</h1>";
    $nums = [1,2,3];
    var_dump($nums);
    echo "<br>";
    $fruits = array("mango", "cherry");
    var_dump($fruits);
    echo $fruits[0]; // mango
    echo "<br>";
    $colors = [5 => "red", 3 => "green", 7 => "yellow"];
    var_dump($colors);
    echo $colors[7]; //yellow
    echo "<br>";
    $person = [
        'name' => 'John',
        'age' => 25,
        'email' => 'john@example.com'
    ];
    
    var_dump($person);
    echo "<br>";
    echo $person['name']; //John

    $persons = [
        [
            'name' => 'John',
            'age' => 25,
            'email' => 'john@example.com'
        ],
        [
            'name' => 'Kevin',
            'age' => 40,
            'email' => 'kevin@example.com'
        ]
        ];
    // print_r($persons);
    echo "<br>";
    echo $persons[1]['name']; //Kevin

    var_dump(json_encode($persons));
?>