<?php
    echo '<h1>String functions in PHP</h1>';
    $str = "Xin chao";
    echo strlen($str);
    // strrev(), strtolower(), strtoupper()
    //find and replace: str_replace()
    // str_starts_with(), str_ends_with()
    echo "<br>";
    echo htmlspecialchars("<h1>String functions in PHP</h1>");
    echo "<br>";
    echo htmlspecialchars("<script>alert('Hi')</script>");
    // echo "<script>alert('Hi')</script>";
    echo "<br>";
    printf('%s likes %s', 'Dung', 'Mercedes G63 AMG');
    echo "<br>";
    printf('pi = %f', 3.14);
?>