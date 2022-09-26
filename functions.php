<?php
    echo "<h1>Array in PHP</h1>";
    $age = 22;
    function sayHello(string $message){
        echo $GLOBALS['age'];
        echo "<h2>$message</h2>";
    }
    sayHello("Xin chao");

    //return and default value
    function sum(int $a = 0, int $b = 0){
        return $a + $b;
    }
    echo sum(1, 2); //3

    $sum = function(int $a = 0, int $b = 0){
        return $a + $b;
    };
    echo "<br>";
    echo $sum(1, 2); // 3

    //arrow function
    $func = fn(int $a = 0, int $b = 0) => $a - $b;
    echo "<br>";
    echo $func(2, 1); // 1
    echo "<br>";

    $names = ['John', 'Nam', 'Mai']; 
    echo count($names); //3
    echo "<br>";
    var_dump(in_array("John", $names)); //bool(true)
    array_push($names, "Dung"); // pop, shift, unshift
    var_dump($names); //array(4) { [0]=> string(4) "John" [1]=> string(3) "Nam" [2]=> string(3) "Mai" [3]=> string(4) "Dung" }

    //unset remove item unset($names[index]);
    // print_r(array_chunk($names, 2));
    // {
        // 0: {
            // 0: "John",
            // 1: "Nam"
        // },
        // 1: {
            // 0: "Mai",
            // 1: "Dung"
        // }
    // },

    //! concat array_merged($array, $array)

    //spread
    $arr = [1, 2];
    $new = [...$arr];
    // print_r($new);


    $keys = ["name", "age"];
    $values = ["Dung", 22];

    // print_r(array_combine($keys, $values));
    // {
    //     name: "Dung",
    //     age: "22"
    // },

    //print_r(array_keys($keys)); // 0, 1
    //print_r(array_values($keys)); // name, age

    //array_flip: reverse key -> value

    $numbers = range(1, 10);
    // var_dump($numbers);

    $cars = array("Volvo", "Mercedes", "Ferrari", "Toyota");
    function myCallback($item)
    {
        echo "$item <br>";
    }
    array_map('myCallback', $cars);
    $num = [1, 2, 3, 4];
    var_dump(array_filter($num, fn ($item) => $item&1));
?>