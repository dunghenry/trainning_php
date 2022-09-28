<?php
    echo '<h1>Exeptions in PHP</h1>';
    function divide($a, $b){
        if(!$b){
            throw new Exception("Can not divide by zero");
           
        }
        return $a/$b;
    };
    try {
        echo divide(5, 1);
        echo "<br>";
        echo divide(5, 0);
        echo "MSG";
    } catch (Exception $e) {
        echo $e->getMessage();
        echo "<br>";
    }
    finally{
        echo "Done";
        echo "\n";
    }
?>